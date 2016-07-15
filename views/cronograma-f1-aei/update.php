<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CronogramaF1Aei */

$this->title = 'Update Cronograma F1 Aei: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cronograma F1 Aeis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cronograma-f1-aei-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
