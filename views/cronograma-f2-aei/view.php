<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CronogramaF2Aei */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cronograma F2 Aeis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cronograma-f2-aei-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cronograma_aei_visita_id',
            'grado',
            'seccion',
            'nro_estudiantes',
            'hora_inicio',
            'hora_fin',
            'c1_p1',
            'c1_p2',
            'c1_p3',
            'c2_p1',
            'c2_p2',
            'c2_p3',
            'c3_p1',
            'c3_p2',
            'c3_p3',
            'c4_p1',
            'c4_p2',
            'c4_p3',
            'c5_p1',
            'c5_p2',
            'c5_p3',
            'c6_p1',
            'c6_p2',
            'c6_p3',
            'aspecto_abordado',
            'compromisos',
            'fecha_registro',
            'estado',
        ],
    ]) ?>

</div>
