<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CronogramaF2Aei */

$this->title = 'Update Cronograma F2 Aei: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cronograma F2 Aeis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cronograma-f2-aei-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
