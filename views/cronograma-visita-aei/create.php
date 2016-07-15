<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CronogramaVisitaAei */

$this->title = 'Create Cronograma Visita Aei';
$this->params['breadcrumbs'][] = ['label' => 'Cronograma Visita Aeis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cronograma-visita-aei-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
