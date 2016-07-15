<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CronogramaF1Aei */

$this->title = 'Create Cronograma F1 Aei';
$this->params['breadcrumbs'][] = ['label' => 'Cronograma F1 Aeis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cronograma-f1-aei-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
