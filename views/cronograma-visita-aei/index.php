<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\widgets\LinkPager;
header('Content-Type: text/html; charset=UTF-8');
$visitas = $model->getVisitas($model->buscar);
$floor = 1;
if (isset($_GET['page']) >= 2)
    $floor += ($visitas['pages']->pageSize * $_GET['page']) - $visitas['pages']->pageSize;
?>


<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
]); ?>
<div class="col-md-10">
    <div class="form-group field-cronograma_visita_aei-buscar required">
        <label>Buscar docenete o IIEE:</label>
        <input class="form-control" name="CronogramaVisitaAei[buscar]">
    </div>
</div>
<div class="col-md-2">
    <label>&nbsp</label>
    <input type="submit" class="btn">
</div>
<?php ActiveForm::end(); ?>

<div class="col-md-12">
    <?= Html::a('Nuevo',['cronograma-visita-aei/nuevo'],['class'=>' btn btn-default']);?><br>
</div>
<div class="clearfix"></div>
<div class="col-md-12"><br>
    <table class="table">
        <thead style="background: #D9D9D9">
            <th><b>Nro</b></th>
            <th><b>IIEE</b></th>
            <th><b>Docente</b></th>
            <th><b>Visita</b></th>
            <th><b>F1</b></th>
            <th><b>F2</b></th>
            <th><b>Opciones</b></th>
        </thead>
        <tbody>
            <?php $i=1; ?>
            <?php foreach($visitas['visitas'] as $visita){ ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $visita["denominacion"] ?></td>
                    <td><?= $visita["nombres"] ?></td>
                    <td><?= $visita["visita"] ?></td>
                    <td><?= Html::a('<span class="glyphicon glyphicon-list-alt"></span>',['cronograma-f1-aei/nuevo','id'=>$visita["id"]],['class'=>' ']);?></td>
                    <td><?= Html::a('<span class="glyphicon glyphicon-list-alt"></span>',['cronograma-f2-aei/nuevo','id'=>$visita["id"]],['class'=>' ']);?></td>
                    <td>
                        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span>',['cronograma-f1-aei/nuevo','id'=>$visita["id"]],['class'=>' ']);?>
                        <span class="glyphicon glyphicon-trash"></span>
                    </td>
                </tr>
            <?php $i++; ?>
            <?php } ?>
        </tbody>
    </table>
</div>