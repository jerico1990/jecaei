<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<script src="<?= \Yii::$app->request->BaseUrl ?>/js/jquery-1.10.2.js"></script>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<?php $form = ActiveForm::begin([]); ?>
<div class="col-md-6" style="display: inline-block">
    <div class="form-group id_institucion">
        <label>Institución educativa:</label>
        <select id="cronograma_visita_aei-codigo_modular" name="CronogramaVisitaAei[codigo_modular]" class="form-control" onchange="Docente($(this).val())">
            <option value></option>
            <?php foreach($instituciones as $institucion): ?>
            <option value="<?= $institucion->codigo_modular ?>"><?= $institucion->denominacion ?> </option>
            <?php endforeach;?>
        </select>
        
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="form-group id_docente">
        <label>Docente de inglés:</label>
        <select id="cronograma_visita_aei-docente_id" name="CronogramaVisitaAei[docente_id]" class="form-control" onchange="Visita($(this).val())">
            <option value></option>
        </select>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="form-group visita">
        <label>Nro. de visita:</label>
        <select id="cronograma_visita_aei-visita" name="CronogramaVisitaAei[visita]" class="form-control" >
            <option value></option>
        </select>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="form-group fecha_visita">
        <label>Fecha:</label>
        <input type="date" id="cronograma_visita_aei-fecha_visita" name="CronogramaVisitaAei[fecha_visita]" class="form-control">
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="form-group">
        <input type="submit" id="guardar" class="btn" value="Finalizar">
    </div>
</div>


<?php ActiveForm::end(); ?>
<div class="clearfix"></div>
<?php
    $docentes= Yii::$app->getUrlManager()->createUrl('cronograma-visita-aei/get-docentes');
    $visitas= Yii::$app->getUrlManager()->createUrl('cronograma-visita-aei/get-visitas');
?>
<script>
    function Docente(value) {
        $.get( "<?= $docentes ?>?codigo_modular="+value, function( data ) {$( "#cronograma_visita_aei-docente_id" ).html( data );});
    }
    function Visita(value) {
        $.get( "<?= $visitas ?>?docente_id="+value, function( data ) {$( "#cronograma_visita_aei-visita" ).html( data );});
    }
    
    $('#guardar').click(function(){
        var error='';
        if ($('#cronograma_visita_aei-codigo_modular').val()=='') {
            error=error+'Debes seleccionar la institución <br>';
            $('.id_institucion').addClass('has-error');
        }
        else
        {
            $('.id_institucion').addClass('has-success');
            $('.id_institucion').removeClass('has-error');
        }
        
        if ($('#cronograma_visita_aei-docente_id').val()=='') {
            error=error+'Debes seleccionar el docente <br>';
            $('.id_docente').addClass('has-error');
        }
        else
        {
            $('.id_docente').addClass('has-success');
            $('.id_docente').removeClass('has-error');
        }
        
        if ($('#cronograma_visita_aei-visita').val()=='') {
            error=error+'Debes seleccionar el Nro de visita<br>';
            $('.visita').addClass('has-error');
        }
        else
        {
            $('.visita').addClass('has-success');
            $('.visita').removeClass('has-error');
        }
        
        if ($('#cronograma_visita_aei-fecha_visita').val()=='') {
            error=error+'Debes ingresar la fecha de visita <br>';
            $('.fecha_visita').addClass('has-error');
        }
        else
        {
            $('.fecha_visita').addClass('has-success');
            $('.fecha_visita').removeClass('has-error');
        }
        
        if (error!='')
        {
            /*$.notify({
                message: error 
            },{
                type: 'danger',
                z_index: 1000000,
                placement: {
                    from: 'bottom',
                    align: 'right'
                },
            });*/
            return false;
        }
        else
        {
            var txt;
            var r = confirm("¿Estás seguro de finalizar la programación de tu visita?");
            if (r == true) {
                return true; 
            } else {
                return false; 
            }
           
        }
    });
</script>