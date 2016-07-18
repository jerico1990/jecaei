<?php

namespace app\models;
use yii\db\Query;
use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "cronograma_visita_aei".
 *
 * @property integer $id
 * @property string $codigo_modular
 * @property integer $docente_id
 * @property integer $visita
 * @property string $fecha_visita
 * @property integer $usuario_creador
 * @property string $fecha_registro
 * @property integer $estado
 */
class CronogramaVisitaAei extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $buscar;
    public $archivo;
    public $documento;
    public $f1;
    public $f2;
    public static function tableName()
    {
        return 'cronograma_visita_aei';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id'], 'required'],
            [['id', 'docente_id', 'visita', 'usuario_creador', 'estado'], 'integer'],
            [['fecha_visita', 'fecha_registro'], 'safe'],
            [['codigo_modular'], 'string', 'max' => 7],
            [['buscar'], 'string', 'max' => 150],
            [['archivo'], 'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo_modular' => 'Codigo Modular',
            'docente_id' => 'Docente ID',
            'visita' => 'Visita',
            'fecha_visita' => 'Fecha Visita',
            'usuario_creador' => 'Usuario Creador',
            'fecha_registro' => 'Fecha Registro',
            'estado' => 'Estado',
        ];
    }
    
    public function getVisitas($buscar)
    {
        
        $usuario=Usuario::findOne(\Yii::$app->user->id);
        
        $query = new Query;
        if(!$buscar)
        {
            $query->select(['
                            cronograma_visita_aei.id,
                            institucion.denominacion,
                            concat(persona.nombre," ",persona.appaterno," ",persona.apmaterno) as nombres,
                            cronograma_visita_aei.visita,
                            cronograma_visita_aei.documento,
                            cronograma_visita_aei.estado
                            '])
            ->from('cronograma_visita_aei')
            ->innerJoin('cronograma_aei_persona','cronograma_aei_persona.codigo_modular=cronograma_visita_aei.codigo_modular')
            ->innerJoin('institucion','institucion.codigo_modular=cronograma_aei_persona.codigo_modular and institucion.estado=1')
            ->innerJoin('docente','docente.id=cronograma_visita_aei.docente_id')
            ->innerJoin('persona','persona.id=docente.id_persona')
            ->where('cronograma_aei_persona.id_persona=:id_persona and cronograma_visita_aei.estado in (1,2)',[':id_persona'=>$usuario->id_persona]);
        }
        else
        {
            $query->select(['
                            cronograma_visita_aei.id,
                            institucion.denominacion,
                            concat(persona.nombre," ",persona.appaterno," ",persona.apmaterno) as nombres,
                            cronograma_visita_aei.visita,
                            cronograma_visita_aei.documento,
                            cronograma_visita_aei.estado
                            '])
            ->from('cronograma_visita_aei')
            ->innerJoin('cronograma_aei_persona','cronograma_aei_persona.codigo_modular=cronograma_visita_aei.codigo_modular')
            ->innerJoin('institucion','institucion.codigo_modular=cronograma_aei_persona.codigo_modular and institucion.estado=1')
            ->innerJoin('docente','docente.id=cronograma_visita_aei.docente_id')
            ->innerJoin('persona','persona.id=docente.id_persona')
            ->where('cronograma_aei_persona.id_persona=:id_persona and concat(institucion.denominacion," ",persona.nombre," ",persona.appaterno," ",persona.apmaterno) like "%'.$buscar.'%" and cronograma_visita_aei.estado in (1,2)',
                    [':id_persona'=>$usuario->id_persona]);
        }
        
          
        $result = Yii::$app->tools->Pagination($query,150);
        
        return ['visitas' => $result['result'], 'pages' => $result['pages']];
    }
}
