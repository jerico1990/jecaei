<?php

namespace app\controllers;

use Yii;
use app\models\CronogramaF1Aei;
use app\models\CronogramaF1AeiSearch;
use app\models\CronogramaVisitaAei;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CronogramaF1AeiController implements the CRUD actions for CronogramaF1Aei model.
 */
class CronogramaF1AeiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CronogramaF1Aei models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CronogramaF1AeiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CronogramaF1Aei model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CronogramaF1Aei model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CronogramaF1Aei();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CronogramaF1Aei model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CronogramaF1Aei model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CronogramaF1Aei model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CronogramaF1Aei the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CronogramaF1Aei::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionNuevo($id)
    {
        $visita=CronogramaVisitaAei::findOne($id);
        $model=CronogramaF1Aei::find()->where('cronograma_aei_visita_id=:cronograma_aei_visita_id',[':cronograma_aei_visita_id'=>$id])->one();
        if(!$model)
        {
            $model=new CronogramaF1Aei;
        }
        else
        {
            
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->cronograma_aei_visita_id=$id;
            $model->estado=1;
            $model->save();
        }
        
        return $this->render('nuevo',['model'=>$model,'visita'=>$visita]);
    }
}
