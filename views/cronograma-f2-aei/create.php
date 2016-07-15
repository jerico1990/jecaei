<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CronogramaF2Aei */

$this->title = 'Create Cronograma F2 Aei';
$this->params['breadcrumbs'][] = ['label' => 'Cronograma F2 Aeis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cronograma-f2-aei-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
