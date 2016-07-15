<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CronogramaF2Aei */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cronograma-f2-aei-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cronograma_aei_visita_id')->textInput() ?>

    <?= $form->field($model, 'grado')->textInput() ?>

    <?= $form->field($model, 'seccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nro_estudiantes')->textInput() ?>

    <?= $form->field($model, 'hora_inicio')->textInput() ?>

    <?= $form->field($model, 'hora_fin')->textInput() ?>

    <?= $form->field($model, 'c1_p1')->textInput() ?>

    <?= $form->field($model, 'c1_p2')->textInput() ?>

    <?= $form->field($model, 'c1_p3')->textInput() ?>

    <?= $form->field($model, 'c2_p1')->textInput() ?>

    <?= $form->field($model, 'c2_p2')->textInput() ?>

    <?= $form->field($model, 'c2_p3')->textInput() ?>

    <?= $form->field($model, 'c3_p1')->textInput() ?>

    <?= $form->field($model, 'c3_p2')->textInput() ?>

    <?= $form->field($model, 'c3_p3')->textInput() ?>

    <?= $form->field($model, 'c4_p1')->textInput() ?>

    <?= $form->field($model, 'c4_p2')->textInput() ?>

    <?= $form->field($model, 'c4_p3')->textInput() ?>

    <?= $form->field($model, 'c5_p1')->textInput() ?>

    <?= $form->field($model, 'c5_p2')->textInput() ?>

    <?= $form->field($model, 'c5_p3')->textInput() ?>

    <?= $form->field($model, 'c6_p1')->textInput() ?>

    <?= $form->field($model, 'c6_p2')->textInput() ?>

    <?= $form->field($model, 'c6_p3')->textInput() ?>

    <?= $form->field($model, 'aspecto_abordado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compromisos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_registro')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
