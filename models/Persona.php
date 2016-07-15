<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $appaterno
 * @property string $apmaterno
 * @property string $estado_civil
 * @property string $sexo
 * @property integer $id_tipodoc
 * @property string $nrodoc
 * @property string $direccion
 * @property string $id_ubigeo
 * @property string $email
 * @property string $telefono
 * @property string $celular
 * @property integer $estado
 * @property string $fecha_creacion
 * @property integer $user_creacion
 * @property string $fecha_modificacion
 * @property integer $user_modifica
 * @property string $fecha_nac
 * @property integer $tipo_persona
 * @property integer $id_especialidad
 * @property integer $id_especialidad2
 * @property integer $id_tipo_condicion
 * @property string $cod_alumno
 * @property integer $grado_actual
 * @property string $validacion_dni
 * @property string $situacion_matricula
 * @property string $situacion_final
 * @property integer $flag
 * @property string $codmodular
 * @property integer $id_especialidad3
 * @property integer $cant_personal
 * @property string $f_sistema
 * @property string $f_decla_sistema
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipodoc', 'estado', 'user_creacion', 'user_modifica', 'tipo_persona', 'id_especialidad', 'id_especialidad2', 'id_tipo_condicion', 'grado_actual', 'flag', 'id_especialidad3', 'cant_personal'], 'integer'],
            [['fecha_creacion', 'fecha_modificacion', 'fecha_nac'], 'safe'],
            [['validacion_dni', 'situacion_matricula', 'situacion_final'], 'string'],
            [['nombre'], 'string', 'max' => 80],
            [['appaterno', 'apmaterno'], 'string', 'max' => 100],
            [['estado_civil', 'sexo'], 'string', 'max' => 1],
            [['nrodoc'], 'string', 'max' => 11],
            [['direccion'], 'string', 'max' => 120],
            [['id_ubigeo'], 'string', 'max' => 6],
            [['email'], 'string', 'max' => 300],
            [['telefono', 'celular'], 'string', 'max' => 50],
            [['cod_alumno', 'codmodular'], 'string', 'max' => 20],
            [['f_sistema', 'f_decla_sistema'], 'string', 'max' => 14],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'appaterno' => 'Appaterno',
            'apmaterno' => 'Apmaterno',
            'estado_civil' => 'Estado Civil',
            'sexo' => 'Sexo',
            'id_tipodoc' => 'Id Tipodoc',
            'nrodoc' => 'Nrodoc',
            'direccion' => 'Direccion',
            'id_ubigeo' => 'Id Ubigeo',
            'email' => 'Email',
            'telefono' => 'Telefono',
            'celular' => 'Celular',
            'estado' => 'Estado',
            'fecha_creacion' => 'Fecha Creacion',
            'user_creacion' => 'User Creacion',
            'fecha_modificacion' => 'Fecha Modificacion',
            'user_modifica' => 'User Modifica',
            'fecha_nac' => 'Fecha Nac',
            'tipo_persona' => 'Tipo Persona',
            'id_especialidad' => 'Id Especialidad',
            'id_especialidad2' => 'Id Especialidad2',
            'id_tipo_condicion' => 'Id Tipo Condicion',
            'cod_alumno' => 'Cod Alumno',
            'grado_actual' => 'Grado Actual',
            'validacion_dni' => 'Validacion Dni',
            'situacion_matricula' => 'Situacion Matricula',
            'situacion_final' => 'Situacion Final',
            'flag' => 'Flag',
            'codmodular' => 'Codmodular',
            'id_especialidad3' => 'Id Especialidad3',
            'cant_personal' => 'Cant Personal',
            'f_sistema' => 'F Sistema',
            'f_decla_sistema' => 'F Decla Sistema',
        ];
    }
}
