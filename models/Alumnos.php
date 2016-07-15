<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property integer $id_alumno
 * @property string $codigo_modular
 * @property integer $id_grado
 * @property string $des_grado
 * @property integer $id_seccion
 * @property string $des_seccion
 * @property string $ape_paterno
 * @property string $ape_materno
 * @property string $nombre
 * @property string $dni
 * @property string $codigo_estudiante
 * @property string $sexo
 * @property string $fec_nac
 * @property string $situacion_ini
 * @property string $situacion_final
 * @property string $jec
 * @property integer $flg_sync
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_alumno', 'codigo_modular'], 'required'],
            [['id_alumno', 'id_grado', 'id_seccion', 'flg_sync'], 'integer'],
            [['codigo_modular'], 'string', 'max' => 15],
            [['des_grado', 'des_seccion', 'codigo_estudiante', 'situacion_ini', 'situacion_final'], 'string', 'max' => 50],
            [['ape_paterno', 'ape_materno'], 'string', 'max' => 200],
            [['nombre'], 'string', 'max' => 400],
            [['dni', 'sexo', 'fec_nac'], 'string', 'max' => 20],
            [['jec'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Id Alumno',
            'codigo_modular' => 'Codigo Modular',
            'id_grado' => 'Id Grado',
            'des_grado' => 'Des Grado',
            'id_seccion' => 'Id Seccion',
            'des_seccion' => 'Des Seccion',
            'ape_paterno' => 'Ape Paterno',
            'ape_materno' => 'Ape Materno',
            'nombre' => 'Nombre',
            'dni' => 'Dni',
            'codigo_estudiante' => 'Codigo Estudiante',
            'sexo' => 'Sexo',
            'fec_nac' => 'Fec Nac',
            'situacion_ini' => 'Situacion Ini',
            'situacion_final' => 'Situacion Final',
            'jec' => 'Jec',
            'flg_sync' => 'Flg Sync',
        ];
    }
}
