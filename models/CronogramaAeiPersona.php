<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cronograma_aei_persona".
 *
 * @property string $curso
 * @property integer $ruta
 * @property string $codigo_modular
 * @property integer $nro_estudiantes
 * @property string $jec
 * @property integer $id_persona
 * @property integer $estado
 */
class CronogramaAeiPersona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $id_institucion;
    public $denominacion;
    public static function tableName()
    {
        return 'cronograma_aei_persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['curso', 'ruta', 'codigo_modular', 'id_persona'], 'required'],
            [['ruta', 'nro_estudiantes', 'id_persona', 'estado'], 'integer'],
            [['curso'], 'string', 'max' => 50],
            [['codigo_modular', 'jec'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'curso' => 'Curso',
            'ruta' => 'Ruta',
            'codigo_modular' => 'Codigo Modular',
            'nro_estudiantes' => 'Nro Estudiantes',
            'jec' => 'Jec',
            'id_persona' => 'Id Persona',
            'estado' => 'Estado',
        ];
    }
}
