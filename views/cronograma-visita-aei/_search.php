<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CronogramaVisitaAeiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cronograma-visita-aei-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'codigo_modular') ?>

    <?= $form->field($model, 'docente_id') ?>

    <?= $form->field($model, 'visita') ?>

    <?= $form->field($model, 'fecha_visita') ?>

    <?php // echo $form->field($model, 'usuario_creador') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
