<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CronogramaF2AeiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cronograma F2 Aeis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cronograma-f2-aei-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cronograma F2 Aei', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cronograma_aei_visita_id',
            'grado',
            'seccion',
            'nro_estudiantes',
            // 'hora_inicio',
            // 'hora_fin',
            // 'c1_p1',
            // 'c1_p2',
            // 'c1_p3',
            // 'c2_p1',
            // 'c2_p2',
            // 'c2_p3',
            // 'c3_p1',
            // 'c3_p2',
            // 'c3_p3',
            // 'c4_p1',
            // 'c4_p2',
            // 'c4_p3',
            // 'c5_p1',
            // 'c5_p2',
            // 'c5_p3',
            // 'c6_p1',
            // 'c6_p2',
            // 'c6_p3',
            // 'aspecto_abordado',
            // 'compromisos',
            // 'fecha_registro',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
