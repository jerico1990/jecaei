<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Recuperar;
use app\models\Mensajes;
use app\models\Persona;
use app\models\Usuario;

class LoginController extends Controller
{
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        
        $this->layout='blanco';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        
        $model=new LoginForm();
       
        if($model->load(Yii::$app->request->post()) && $model->login())
        {
            return $this->redirect(['panel/index']);
        }
        return $this->render('index',['model'=>$model]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionRecuperar()
    {
        $this->layout='blank';
        $model= new Recuperar;
        $model->scenario='recuperar';
        $mensajes=new Mensajes();
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $persona=Persona::find()->select('id,email')->where('email=:email',[':email'=>$model->correo])->one();
            $usuario=Usuario::find()->where('id_persona=:id_persona',[':id_persona'=>$persona->id])->one();
            $usuario->scenario='consulta';
            $usuario->link_verificacion=$mensajes->generate_random_key();
            $usuario->update();
            $mensajes->recuperar($model->correo,$usuario->link_verificacion);
            
            
            Yii::$app->session->setFlash('mensaje');
            return $this->refresh();
        }
        return $this->render('recuperar',['model'=>$model]);
    }
}
