<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<script src="<?= \Yii::$app->request->BaseUrl ?>/js/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<?php $form = ActiveForm::begin([]); ?>
<div class="col-md-2">
    <div class="form-group grado">
        <label>Grado:</label>
        <select name="CronogramaF2Aei[grado]" id="cronograma_f2_aei-grado" class="form-control" onchange="Grado(event,$(this).val(),'<?= $visita->codigo_modular ?>')">
            <option></option>
            <option value=10 <?= ($model->grado==10)?'selected':'' ?> >1er</option>
            <option value=11 <?= ($model->grado==11)?'selected':'' ?>>2do</option>
            <option value=12 <?= ($model->grado==12)?'selected':'' ?>>3er</option>
            <option value=13 <?= ($model->grado==13)?'selected':'' ?>>4to</option>
            <option value=14 <?= ($model->grado==14)?'selected':'' ?>>5to</option>
        </select>
    </div>
</div>
<div class="col-md-2">
    <div class="form-group seccion">
        <label>Sección:</label>
        <select name="CronogramaF2Aei[seccion]" id="cronograma_f2_aei-seccion" class="form-control">
            <option></option>
            
            
        </select>
    </div>
</div>
<div class="col-md-2">
    <div class="form-group nro_estudiantes">
        <label>Nro. estudiantes:</label>
        <input type="text" name="CronogramaF2Aei[nro_estudiantes]" id="cronograma_f2_aei-nro_estudiantes" class="form-control" value="<?= $model->nro_estudiantes ?>">
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-2">
    <div class="form-group hora_inicio">
        <label>Hora inicio:</label>
        <input type="time" name="CronogramaF2Aei[hora_inicio]" id="cronograma_f2_aei-hora_inicio" class="form-control" value="<?= $model->hora_inicio ?>">
    </div>
</div>
<div class="col-md-2">
    <div class="form-group hora_fin">
        <label>Hora fin:</label>
        <input type="time" name="CronogramaF2Aei[hora_fin]" id="cronograma_f2_aei-hora_fin" class="form-control" value="<?= $model->hora_fin ?>">
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
    <h2>Componente 1: Condiciones necesarias para la ejecución de la sesión</h2>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
    <table class="table">
        <thead>
            <th class="col-md-11">1.- Condiciones necesarias para la ejecución de la sesión</th>
            <th class="col-md-1">Valoración</th>
        </thead>
        <tbody>
            <tr>
                <td>Presenta la planificación de sus actividades Pedagógicas siguiendo las orientaciones básicas del área (carpeta pedagógica).</td>
                <td>
                    <div class="form-group c1_p1">
                        <select id="cronograma_f2_aei-c1_p1" name="CronogramaF2Aei[c1_p1]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c1_p1==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c1_p1==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c1_p1==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c1_p1==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c1_p1==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Utiliza la planificación anual, las unidades didácticas y las sesiones proporcionadas en la plataforma JEC.</td>
                <td>
                    <div class="form-group c1_p2">
                        <select id="cronograma_f2_aei-c1_p2" name="CronogramaF2Aei[c1_p2]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c1_p2==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c1_p2==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c1_p2==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c1_p2==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c1_p2==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>La sesión a desarrollar está de acuerdo al cronograma de la unidad didáctica, es coherente con los propósitos de la unidad previa.</td>
                <td>
                    <div class="form-group c1_p3">
                        <select id="cronograma_f2_aei-c1_p3" name="CronogramaF2Aei[c1_p3]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c1_p3==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c1_p3==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c1_p3==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c1_p3==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c1_p3==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clearfix"></div>


<div class="col-md-12">
    <h2>Componente 2: Intervención del docente promoviendo aprendizajes</h2>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
    <table class="table">
        <thead>
            <th class="col-md-11">2.- Intervención del docente promoviendo aprendizajes</th>
            <th class="col-md-1">Valoración</th>
        </thead>
        <tbody>
            <tr>
                <td>Aplica estrategias que permiten recuperar saberes previos de los estudiantes.</td>
                <td>
                    <div class="form-group c2_p1">
                        <select id="cronograma_f2_aei-c2_p1" name="CronogramaF2Aei[c2_p1]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c2_p1==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c2_p1==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c2_p1==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c2_p1==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c2_p1==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Problematiza y/o plantea el conflicto cognitivo adecuado a la situación.</td>
                <td>
                    <div class="form-group c2_p2">
                        <select id="cronograma_f2_aei-c2_p2" name="CronogramaF2Aei[c2_p2]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c2_p2==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c2_p2==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c2_p2==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c2_p2==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c2_p2==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Aplica estrategias que permiten articular los saberes previos con el nuevo aprendizaje.</td>
                <td>
                    <div class="form-group c2_p3">
                        <select id="cronograma_f2_aei-c2_p3" name="CronogramaF2Aei[c2_p3]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c2_p3==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c2_p3==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c2_p3==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c2_p3==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c2_p3==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clearfix"></div>


<div class="col-md-12">
    <h2>Componente 3: Evaluación de los aprendizajes</h2>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
    <table class="table">
        <thead>
            <th class="col-md-11">3.- Evaluación de los aprendizajes</th>
            <th class="col-md-1">Valoración</th>
        </thead>
        <tbody>
            <tr>
                <td>Comunica con claridad el próposito de la sesión y las actividades previstas.</td>
                <td>
                    <div class="form-group c3_p1">
                        <select id="cronograma_f2_aei-c3_p1" name="CronogramaF2Aei[c3_p1]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c3_p1==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c3_p1==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c3_p1==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c3_p1==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c3_p1==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Durante el desarrollo de la sesión realiza observaciones sobre el aprendizaje de los estudiantes y los registra.</td>
                <td>
                    <div class="form-group c3_p2">
                        <select id="cronograma_f2_aei-c3_p2" name="CronogramaF2Aei[c3_p2]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c3_p2==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c3_p2==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c3_p2==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c3_p2==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c3_p2==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Los instrumentos de evaluación que utiliza permiten evaluar las capacidades e indicadores previstos en la sesión.</td>
                <td>
                    <div class="form-group c3_p3">
                        <select id="cronograma_f2_aei-c3_p3" name="CronogramaF2Aei[c3_p3]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c3_p3==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c3_p3==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c3_p3==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c3_p3==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c3_p3==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clearfix"></div>


<div class="col-md-12">
    <h2>Componente 4: Organización y utilización del tiempo y espacio en el aula</h2>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
    <table class="table">
        <thead>
            <th class="col-md-11">4.- Organización y utilización del tiempo y espacio en el aula</th>
            <th class="col-md-1">Valoración</th>
        </thead>
        <tbody>
            <tr>
                <td>Inicia la sesión puntualmente y permanece en el aula durante toda la sesión respetando el horario establecido por el área.</td>
                <td>
                    <div class="form-group c4_p1">
                        <select id="cronograma_f2_aei-c4_p1" name="CronogramaF2Aei[c4_p1]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c4_p1==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c4_p1==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c4_p1==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c4_p1==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c4_p1==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Dosifica el tiempo de las actividades pedagógicas teniendo en cuenta las características de los procesos pedagógicos.</td>
                <td>
                    <div class="form-group c4_p2">
                        <select id="cronograma_f2_aei-c4_p2" name="CronogramaF2Aei[c4_p2]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c4_p2==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c4_p2==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c4_p2==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c4_p2==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c4_p2==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Organiza el espacio y/o mobiliario de acuerdo a los propósitos a las necesidades de la sesión.</td>
                <td>
                    <div class="form-group c4_p3">
                        <select id="cronograma_f2_aei-c4_p3" name="CronogramaF2Aei[c4_p3]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c4_p3==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c4_p3==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c4_p3==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c4_p3==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c4_p3==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clearfix"></div>


<div class="col-md-12">
    <h2>Componente 5: Uso de materiales y recursos educativos</h2>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
    <table class="table">
        <thead>
            <th class="col-md-11">5.- Uso de materiales y recursos educativos</th>
            <th class="col-md-1">Valoración</th>
        </thead>
        <tbody>
            <tr>
                <td>Utiliza de manera oportuna materiales y/o recursos educativos que ayudan al desarrollo de las actividades propuestas.</td>
                <td>
                    <div class="form-group c5_p1">
                        <select id="cronograma_f2_aei-c5_p1" name="CronogramaF2Aei[c5_p1]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c5_p1==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c5_p1==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c5_p1==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c5_p1==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c5_p1==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Orienta oportunamente a los estudiantes sobre el uso de los materiales y/o recursos en función del aprendizaje a lograr.</td>
                <td>
                    <div class="form-group c5_p2">
                        <select id="cronograma_f2_aei-c5_p2" name="CronogramaF2Aei[c5_p2]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c5_p2==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c5_p2==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c5_p2==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c5_p2==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c5_p2==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Muestra experticia en el manejo del material y de los medios que utiliza para el desarrollo de la sesión.</td>
                <td>
                    <div class="form-group c5_p3">
                        <select id="cronograma_f2_aei-c5_p3" name="CronogramaF2Aei[c5_p3]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c5_p3==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c5_p3==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c5_p3==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c5_p3==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c5_p3==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clearfix"></div>


<div class="col-md-12">
    <h2>Componente 6: Gestión del clima escolar</h2>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
    <table class="table">
        <thead>
            <th class="col-md-11">6.- Gestión del clima escolar</th>
            <th class="col-md-1">Valoración</th>
        </thead>
        <tbody>
            <tr>
                <td>Escucha con atención y dialoga con los estudiantes en el momento oportuno y de manera equitativa de acuerdo a sus necesidades de aprendizaje.</td>
                <td>
                    <div class="form-group c6_p1">
                        <select id="cronograma_f2_aei-c6_p1" name="CronogramaF2Aei[c6_p1]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c6_p1==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c6_p1==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c6_p1==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c6_p1==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c6_p1==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Toma en cuenta las diferencias individuales de los estudiantes: intereses, ritmos y estilos de aprendizaje en su quehacer pedagógico.</td>
                <td>
                    <div class="form-group c6_p2">
                        <select id="cronograma_f2_aei-c6_p2" name="CronogramaF2Aei[c6_p2]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c6_p2==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c6_p2==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c6_p2==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c6_p2==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c6_p2==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Promueve entre los estudiantes relaciones horizontales, fraternas y colaborativas creando un clima de confianza y armonía.</td>
                <td>
                    <div class="form-group c6_p3">
                        <select id="cronograma_f2_aei-c6_p3" name="CronogramaF2Aei[c6_p3]" class="form-control">
                            <option></option>
                            <option value=1 <?= ($model->c6_p3==1)?'selected':'' ?>>1</option>
                            <option value=2 <?= ($model->c6_p3==2)?'selected':'' ?>>2</option>
                            <option value=3 <?= ($model->c6_p3==3)?'selected':'' ?>>3</option>
                            <option value=4 <?= ($model->c6_p3==4)?'selected':'' ?>>4</option>
                            <option value=5 <?= ($model->c6_p3==5)?'selected':'' ?>>5</option>
                        </select>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="form-group">
        <input type="submit" id="guardar" class="btn" value="Guardar">
    </div>
</div>
<?php ActiveForm::end(); ?>
<?php
    $secciones= Yii::$app->getUrlManager()->createUrl('cronograma-visita-aei/secciones');
?>
<script>
    $('#guardar').click(function(){
        var error='';
        if ($('#cronograma_f2_aei-grado').val()=='') {
            error=error+'Debes seleccionar el grado<br>';
            $('.grado').addClass('has-error');
        }
        else
        {
            $('.grado').addClass('has-success');
            $('.grado').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-seccion').val()=='') {
            error=error+'Debes seleccionar la sección <br>';
            $('.seccion').addClass('has-error');
        }
        else
        {
            $('.seccion').addClass('has-success');
            $('.seccion').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-nro_estudiantes').val()=='') {
            error=error+'Debes ingresar la cantidad de estudiantes<br>';
            $('.nro_estudiantes').addClass('has-error');
        }
        else
        {
            $('.nro_estudiantes').addClass('has-success');
            $('.nro_estudiantes').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-hora_inicio').val()=='') {
            error=error+'Debes ingresar la hora inicio<br>';
            $('.hora_inicio').addClass('has-error');
        }
        else
        {
            $('.hora_inicio').addClass('has-success');
            $('.hora_inicio').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-hora_fin').val()=='') {
            error=error+'Debes ingresar la hora fin<br>';
            $('.hora_fin').addClass('has-error');
        }
        else
        {
            $('.hora_fin').addClass('has-success');
            $('.hora_fin').removeClass('has-error');
        }
        
     
        
        if ($('#cronograma_f2_aei-c1_p1').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 1 preguta 1 <br>';
            $('.c1_p1').addClass('has-error');
        }
        else
        {
            $('.c1_p1').addClass('has-success');
            $('.c1_p1').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c1_p2').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 1 preguta 2 <br>';
            $('.c1_p2').addClass('has-error');
        }
        else
        {
            $('.c1_p2').addClass('has-success');
            $('.c1_p2').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c1_p3').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 1 preguta 3 <br>';
            $('.c1_p3').addClass('has-error');
        }
        else
        {
            $('.c1_p3').addClass('has-success');
            $('.c1_p3').removeClass('has-error');
        }
        
        /*c2*/
        if ($('#cronograma_f2_aei-c2_p1').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 2 preguta 1 <br>';
            $('.c2_p1').addClass('has-error');
        }
        else
        {
            $('.c2_p1').addClass('has-success');
            $('.c2_p1').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c2_p2').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 2 preguta 2 <br>';
            $('.c2_p2').addClass('has-error');
        }
        else
        {
            $('.c2_p2').addClass('has-success');
            $('.c2_p2').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c2_p3').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 2 preguta 3 <br>';
            $('.c2_p3').addClass('has-error');
        }
        else
        {
            $('.c2_p3').addClass('has-success');
            $('.c2_p3').removeClass('has-error');
        }
        
        /*c3*/
        if ($('#cronograma_f2_aei-c3_p1').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 3 preguta 1 <br>';
            $('.c3_p1').addClass('has-error');
        }
        else
        {
            $('.c3_p1').addClass('has-success');
            $('.c3_p1').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c3_p2').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 3 preguta 2 <br>';
            $('.c3_p2').addClass('has-error');
        }
        else
        {
            $('.c3_p2').addClass('has-success');
            $('.c3_p2').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c3_p3').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 3 preguta 3 <br>';
            $('.c3_p3').addClass('has-error');
        }
        else
        {
            $('.c3_p3').addClass('has-success');
            $('.c3_p3').removeClass('has-error');
        }
        
        /*c4*/
        if ($('#cronograma_f2_aei-c4_p1').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 4 preguta 1 <br>';
            $('.c4_p1').addClass('has-error');
        }
        else
        {
            $('.c4_p1').addClass('has-success');
            $('.c4_p1').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c4_p2').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 4 preguta 2 <br>';
            $('.c4_p2').addClass('has-error');
        }
        else
        {
            $('.c4_p2').addClass('has-success');
            $('.c4_p2').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c4_p3').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 4 preguta 3 <br>';
            $('.c4_p3').addClass('has-error');
        }
        else
        {
            $('.c4_p3').addClass('has-success');
            $('.c4_p3').removeClass('has-error');
        }
        
        /*c5*/
        if ($('#cronograma_f2_aei-c5_p1').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 5 preguta 1 <br>';
            $('.c5_p1').addClass('has-error');
        }
        else
        {
            $('.c5_p1').addClass('has-success');
            $('.c5_p1').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c5_p2').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 5 preguta 2 <br>';
            $('.c5_p2').addClass('has-error');
        }
        else
        {
            $('.c5_p2').addClass('has-success');
            $('.c5_p2').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c5_p3').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 5 preguta 3 <br>';
            $('.c5_p3').addClass('has-error');
        }
        else
        {
            $('.c5_p3').addClass('has-success');
            $('.c5_p3').removeClass('has-error');
        }
        
        /*c6*/
        if ($('#cronograma_f2_aei-c6_p1').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 6 preguta 1 <br>';
            $('.c6_p1').addClass('has-error');
        }
        else
        {
            $('.c6_p1').addClass('has-success');
            $('.c6_p1').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c6_p2').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 6 preguta 2 <br>';
            $('.c6_p2').addClass('has-error');
        }
        else
        {
            $('.c6_p2').addClass('has-success');
            $('.c6_p2').removeClass('has-error');
        }
        
        if ($('#cronograma_f2_aei-c6_p3').val()=='') {
            error=error+'Debes seleccionar la valoración del Componente 6 preguta 3 <br>';
            $('.c6_p3').addClass('has-error');
        }
        else
        {
            $('.c6_p3').addClass('has-success');
            $('.c6_p3').removeClass('has-error');
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
            console.log("a");
           return true; 
        }
    });
    
    function Grado(event,value,codigo) {
        event.preventDefault();
        $.get( "<?= $secciones ?>?grado="+value+"&codigo_modular="+codigo, function( data ) {$( "#cronograma_f2_aei-seccion" ).html( data );});
        //$( "#w0" ).submit();
    }
</script>