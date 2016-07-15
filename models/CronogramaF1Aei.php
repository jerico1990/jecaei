<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cronograma_f1_aei".
 *
 * @property integer $id
 * @property integer $cronograma_aei_visita_id
 * @property integer $grado
 * @property string $seccion
 * @property integer $nro_estudiantes
 * @property string $hora_inicio
 * @property string $hora_fin
 * @property integer $c1_p1
 * @property integer $c1_p2
 * @property integer $c1_p3
 * @property integer $c2_p1
 * @property integer $c2_p2
 * @property integer $c2_p3
 * @property integer $c3_p1
 * @property integer $c3_p2
 * @property integer $c3_p3
 * @property integer $c4_p1
 * @property integer $c4_p2
 * @property integer $c4_p3
 * @property integer $c5_p1
 * @property integer $c5_p2
 * @property integer $c5_p3
 * @property integer $c6_p1
 * @property integer $c6_p2
 * @property integer $c6_p3
 * @property string $aspecto_abordado
 * @property string $compromisos
 * @property string $fecha_registro
 * @property integer $estado
 */
class CronogramaF1Aei extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cronograma_f1_aei';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cronograma_aei_visita_id', 'grado', 'nro_estudiantes', 'c1_p1', 'c1_p2', 'c1_p3', 'c2_p1', 'c2_p2', 'c2_p3', 'c3_p1', 'c3_p2', 'c3_p3', 'c4_p1', 'c4_p2', 'c4_p3', 'c5_p1', 'c5_p2', 'c5_p3', 'c6_p1', 'c6_p2', 'c6_p3', 'estado'], 'integer'],
            [['hora_inicio', 'hora_fin', 'fecha_registro'], 'safe'],
            [['seccion'], 'string', 'max' => 11],
            [['aspecto_abordado', 'compromisos'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cronograma_aei_visita_id' => 'Cronograma Aei Visita ID',
            'grado' => 'Grado',
            'seccion' => 'Seccion',
            'nro_estudiantes' => 'Nro Estudiantes',
            'hora_inicio' => 'Hora Inicio',
            'hora_fin' => 'Hora Fin',
            'c1_p1' => 'C1 P1',
            'c1_p2' => 'C1 P2',
            'c1_p3' => 'C1 P3',
            'c2_p1' => 'C2 P1',
            'c2_p2' => 'C2 P2',
            'c2_p3' => 'C2 P3',
            'c3_p1' => 'C3 P1',
            'c3_p2' => 'C3 P2',
            'c3_p3' => 'C3 P3',
            'c4_p1' => 'C4 P1',
            'c4_p2' => 'C4 P2',
            'c4_p3' => 'C4 P3',
            'c5_p1' => 'C5 P1',
            'c5_p2' => 'C5 P2',
            'c5_p3' => 'C5 P3',
            'c6_p1' => 'C6 P1',
            'c6_p2' => 'C6 P2',
            'c6_p3' => 'C6 P3',
            'aspecto_abordado' => 'Aspecto Abordado',
            'compromisos' => 'Compromisos',
            'fecha_registro' => 'Fecha Registro',
            'estado' => 'Estado',
        ];
    }
}
