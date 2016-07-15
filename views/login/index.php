<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\JsExpression;
/* @var $this yii\web\View */
/* @var $model app\models\AuthItem */
/* @var $form yii\widgets\ActiveForm */
$this->title ="Login";
?>
<style>
@media screen and (max-height: 600px){
 .g-recaptcha {
   transform:scale(1.5);
   -webkit-transform:scale(1.5);
   transform-origin:0 0;
   -webkit-transform-origin:0 0;
   }
}
@media screen and ( max-height: 950px){
 .g-recaptcha {
   transform:scale(0.95);
   -webkit-transform:scale(0.95);
   transform-origin:0 0;
   -webkit-transform-origin:0 0;
   }
}



</style>


<div class="clearfix"></div>
<div class="col-md-12 well text-center" style="border-bottom-right-radius: 0px;border-bottom-left-radius: 0px; border: 0px;margin-bottom:  0px;background: #E0E0E0"><!--<b>Soy nuevo, <?= Html::a('Quiero registrarme',['persona/registro'],['class'=>'']); ?></b> --><br></div>
<div class="col-md-12 well" style="border-radius: 0px;border: 0px;margin-top: 0px;margin-bottom: 0px;background: #FFFFFF">
   
   <div class="clearfix"></div>
   <div class="col-md-4" style="float:none;margin:0 auto;vertical-align: middle !important;">
      <div class="login-box">
         <div class="col-md-12 text-center"><h3><b>Ingresa a tu cuenta</b></h3></div>
         <div class="clearfix"></div>
         <div class="col-md-12">&nbsp</div>
         <div class="clearfix"></div>
         <div class="login-box-body">
            
            <?php $form = ActiveForm::begin(); ?>
            <div class="col-md-12">
               <?= $form->field($model,'username',['template' => '<div class="col-md-12"><div class="input-group col-md-12">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>{input}</div></div><div class="col-md-12">{error}</div>',])
                        ->textInput(['placeholder'=>'Ingresa tu usuario'])
                        ->label(false) ?>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
               <?= $form->field($model, 'password',['template' => '<div class="col-md-12"><div class="input-group col-md-12">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>{input}</div></div><div class="col-md-12">{error}</div>',])
                        ->passwordInput(['placeholder'=>'Ingresa tu contraseña'])
                        ->label(false)->error(['class' => 'help-block']) ?>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 captcha" >
               <?php /*= $form->field($model, 'reCaptcha',['template' => '<div class="col-md-12"><div class="input-group col-md-12">
                                                    {input}</div></div>',])->widget(\himiklab\yii2\recaptcha\ReCaptcha::className())->label(false)*/ ?>
            </div>
            <div class="clearfix"></div><p></p>
            <div class="col-md-12">         
               <div class="col-md-12">
               <?= Html::submitButton('INGRESAR AHORA', ['id'=>'y01','class' =>'btn azul btn-block btnrecuperar']) ?>
               </div>
            </div>
            
            
            <div class="clearfix"></div><br>
            <table class="table col-md-12 text-center" style="border: 0px">
               <tr>
                  <td style="border-top: 0px;border-right: 1px solid #707070;vertical-align: middle">
                     <?= Html::a('Olvidé mi usuario y<br> contraseña',['recuperar'],['target'=>'_blank','class'=>'','style'=>'color:#23527c']);?>
                  </td>
                  <td style="border-top: 0px;vertical-align: middle">
                     <?= Html::a('Necesito ayuda',['#'],['class'=>'','style'=>'color:#23527c']);?>
                  </td>
               </tr>
            </table>
            <?php ActiveForm::end(); ?>
            
            <!--<a href="#">Recuperar contraseña</a><br>-->
         </div><!-- /.login-box-body -->
      </div>
   </div><!-- /.login-box -->
</div>

<div class="col-md-12 well" style="border-top-right-radius: 0px;border-top-left-radius: 0px; border: 0px;margin-top:  0px;background: #575756;color: white">
   <p class="pull-left col-md-9">Bienvenido al Sistema de Información de la Jornada Escolar Completa (SIJEC).</p>
   <p class="pull-right col-md-3 text-right">Consultas, dudas o sugerencias:<br> sijec@perueduca.pe</p>
   <div class="clearfix"></div>
</div>
<div class="clearfix"></div>