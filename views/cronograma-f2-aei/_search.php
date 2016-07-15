<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CronogramaF2AeiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cronograma-f2-aei-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cronograma_aei_visita_id') ?>

    <?= $form->field($model, 'grado') ?>

    <?= $form->field($model, 'seccion') ?>

    <?= $form->field($model, 'nro_estudiantes') ?>

    <?php // echo $form->field($model, 'hora_inicio') ?>

    <?php // echo $form->field($model, 'hora_fin') ?>

    <?php // echo $form->field($model, 'c1_p1') ?>

    <?php // echo $form->field($model, 'c1_p2') ?>

    <?php // echo $form->field($model, 'c1_p3') ?>

    <?php // echo $form->field($model, 'c2_p1') ?>

    <?php // echo $form->field($model, 'c2_p2') ?>

    <?php // echo $form->field($model, 'c2_p3') ?>

    <?php // echo $form->field($model, 'c3_p1') ?>

    <?php // echo $form->field($model, 'c3_p2') ?>

    <?php // echo $form->field($model, 'c3_p3') ?>

    <?php // echo $form->field($model, 'c4_p1') ?>

    <?php // echo $form->field($model, 'c4_p2') ?>

    <?php // echo $form->field($model, 'c4_p3') ?>

    <?php // echo $form->field($model, 'c5_p1') ?>

    <?php // echo $form->field($model, 'c5_p2') ?>

    <?php // echo $form->field($model, 'c5_p3') ?>

    <?php // echo $form->field($model, 'c6_p1') ?>

    <?php // echo $form->field($model, 'c6_p2') ?>

    <?php // echo $form->field($model, 'c6_p3') ?>

    <?php // echo $form->field($model, 'aspecto_abordado') ?>

    <?php // echo $form->field($model, 'compromisos') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
