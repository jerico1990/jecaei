<?php

namespace app\controllers;

use Yii;
use app\models\CronogramaVisitaAei;
use app\models\CronogramaVisitaAeiSearch;
use app\models\Usuario;
use app\models\Persona;
use app\models\Alumnos;
use app\models\CronogramaF1Aei;
use app\models\CronogramaF2Aei;


use app\models\CronogramaAeiPersona;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CronogramaVisitaAeiController implements the CRUD actions for CronogramaVisitaAei model.
 */
class CronogramaVisitaAeiController extends Controller
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
     * Lists all CronogramaVisitaAei models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model=new CronogramaVisitaAei;
        $model->load(Yii::$app->request->queryParams);
        return $this->render('index', [
            'model'=>$model
        ]);
    }

    /**
     * Displays a single CronogramaVisitaAei model.
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
     * Creates a new CronogramaVisitaAei model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CronogramaVisitaAei();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CronogramaVisitaAei model.
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
     * Deletes an existing CronogramaVisitaAei model.
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
     * Finds the CronogramaVisitaAei model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CronogramaVisitaAei the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CronogramaVisitaAei::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionNuevo()
    {
        $model=new CronogramaVisitaAei;
        $usuario=Usuario::findOne(Yii::$app->user->identity->id);
        $instituciones= CronogramaAeiPersona::find()
                        ->select('institucion.id as id_institucion,institucion.codigo_modular ,institucion.denominacion')
                        ->innerJoin('institucion','institucion.codigo_modular=cronograma_aei_persona.codigo_modular and institucion.estado=1')
                        ->where('cronograma_aei_persona.id_persona=:id_persona',[':id_persona'=>$usuario->id_persona])->all();
        
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->fecha_registro=date("Y-m-d H:i:s");
            $model->usuario_creador=Yii::$app->user->identity->id;
            $model->estado=1;
            $model->save();
        }
        
        
        return $this->render('nuevo',['instituciones'=>$instituciones,'model'=>$model]);
    }
    
    public function actionGetDocentes($codigo_modular)
    {
        $countDocentes=Persona::find()
                        ->select('docente.id,persona.nombre,persona.appaterno,persona.apmaterno,persona.nrodoc')
                        ->innerJoin('docente','persona.id=docente.id_persona and docente.id_curso in (15)')
                        ->innerJoin('institucion','docente.id_institucion=institucion.id')
                        ->where('institucion.codigo_modular=:codigo_modular',[':codigo_modular'=>$codigo_modular])
                        ->groupBy('persona.appaterno,persona.apmaterno,persona.nombre')
                        ->count();
        $docentes=Persona::find()
                        ->select('docente.id,persona.nombre,persona.appaterno,persona.apmaterno,persona.nrodoc')
                        ->innerJoin('docente','persona.id=docente.id_persona and docente.id_curso in (15)')
                        ->innerJoin('institucion','docente.id_institucion=institucion.id')
                        ->where('institucion.codigo_modular=:codigo_modular',[':codigo_modular'=>$codigo_modular])
                        ->groupBy('persona.appaterno,persona.apmaterno,persona.nombre')
                        ->orderBy('persona.appaterno,persona.apmaterno,persona.nombre')->all();
        
        if($countDocentes>0){
            echo "<option value></option>";
            foreach($docentes as $docente){
                echo "<option value='".$docente->id."'>".$docente->nombre." ".$docente->appaterno." ".$docente->apmaterno."</option>";
            }
        }
        else{
            echo "<option value></option>";
        }
    }
    
    public function actionGetVisitas($docente_id)
    {
        $countVisitas=CronogramaVisitaAei::find()
                        ->where('docente_id=:docente_id',[':docente_id'=>$docente_id])
                        ->count();
        $visitas=CronogramaVisitaAei::find()
                        ->where('docente_id=:docente_id',[':docente_id'=>$docente_id])
                        ->all();
        $arrVisitas=[1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8];
        if($countVisitas>0){
            foreach($visitas as $visita){
                unset($arrVisitas[$visita->visita]);
            }
        }
        echo "<option value></option>";
        foreach($arrVisitas as $arrVisita => $key)
        {
            echo "<option value='$key' >".$key."</option>";
        }
        
    }
    
    public function actionSecciones($grado,$codigo_modular)
    {
        $codigo_modular=str_pad($codigo_modular, 7, "0", STR_PAD_LEFT);
	$countSecciones=Alumnos::find()
                        ->select('id_seccion,des_seccion')
                        ->where("codigo_modular=:codigo_modular and id_grado=:id_grado",[':codigo_modular'=>$codigo_modular,':id_grado'=>$grado])
			->groupBy('id_seccion,des_seccion')
			->count();
        $secciones=Alumnos::find()
			->select('id_seccion,des_seccion')
                        ->where("codigo_modular=:codigo_modular and id_grado=:id_grado",[':codigo_modular'=>$codigo_modular,':id_grado'=>$grado])
			->groupBy('id_seccion,des_seccion')
			->orderBy('des_seccion')
			->all();
        
        if($countSecciones>0){
            echo "<option value></option>";
            foreach($secciones as $seccion){
                echo "<option value='".$seccion->id_seccion."'>".$seccion->des_seccion."</option>";
            }
        }
        else{
            echo "<option value></option>";
        }
    }
    
    public function actionReprogramar($id)
    {
        $model=CronogramaVisitaAei::findOne($id);
        $f1=CronogramaF1Aei::find()->where('cronograma_aei_visita_id=:cronograma_aei_visita_id',[':cronograma_aei_visita_id'=>$id])->one();
        $f2=CronogramaF2Aei::find()->where('cronograma_aei_visita_id=:cronograma_aei_visita_id',[':cronograma_aei_visita_id'=>$id])->one();
        if($f1 || $f2)
        {
            echo "<script>
                alert('No puedes realizar la reprogramación');
                window.location = '../cronograma-visita-aei/index';
                </script>";
            //return $this->redirect(['cronograma-visita-aei/index']);
        }
        $usuario=Usuario::findOne(Yii::$app->user->identity->id);
        $instituciones= CronogramaAeiPersona::find()
                        ->select('institucion.id as id_institucion,institucion.codigo_modular ,institucion.denominacion')
                        ->innerJoin('institucion','institucion.codigo_modular=cronograma_aei_persona.codigo_modular and institucion.estado=1')
                        ->where('cronograma_aei_persona.id_persona=:id_persona',[':id_persona'=>$usuario->id_persona])->all();
        
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->fecha_registro=date("Y-m-d H:i:s");
            $model->usuario_creador=Yii::$app->user->identity->id;
            $model->estado=1;
            $model->save();
        }
        
        
        return $this->render('reprogramar',['instituciones'=>$instituciones,'model'=>$model]);
    }
    
    public function actionValidarReprogramar($id)
    {
        $f1=CronogramaF1Aei::find()->where('cronograma_aei_visita_id=:cronograma_aei_visita_id',[':cronograma_aei_visita_id'=>$id])->one();
        $f2=CronogramaF2Aei::find()->where('cronograma_aei_visita_id=:cronograma_aei_visita_id',[':cronograma_aei_visita_id'=>$id])->one();
        if($f1 || $f2)
        {
            echo "No puedes reprogramar";
        }
    }
}
