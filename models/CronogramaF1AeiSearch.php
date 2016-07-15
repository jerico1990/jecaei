<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CronogramaF1Aei;

/**
 * CronogramaF1AeiSearch represents the model behind the search form about `app\models\CronogramaF1Aei`.
 */
class CronogramaF1AeiSearch extends CronogramaF1Aei
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cronograma_aei_visita_id', 'grado', 'nro_estudiantes', 'c1_p1', 'c1_p2', 'c1_p3', 'c2_p1', 'c2_p2', 'c2_p3', 'c3_p1', 'c3_p2', 'c3_p3', 'c4_p1', 'c4_p2', 'c4_p3', 'c5_p1', 'c5_p2', 'c5_p3', 'c6_p1', 'c6_p2', 'c6_p3', 'estado'], 'integer'],
            [['seccion', 'hora_inicio', 'hora_fin', 'aspecto_abordado', 'compromisos', 'fecha_registro'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CronogramaF1Aei::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cronograma_aei_visita_id' => $this->cronograma_aei_visita_id,
            'grado' => $this->grado,
            'nro_estudiantes' => $this->nro_estudiantes,
            'hora_inicio' => $this->hora_inicio,
            'hora_fin' => $this->hora_fin,
            'c1_p1' => $this->c1_p1,
            'c1_p2' => $this->c1_p2,
            'c1_p3' => $this->c1_p3,
            'c2_p1' => $this->c2_p1,
            'c2_p2' => $this->c2_p2,
            'c2_p3' => $this->c2_p3,
            'c3_p1' => $this->c3_p1,
            'c3_p2' => $this->c3_p2,
            'c3_p3' => $this->c3_p3,
            'c4_p1' => $this->c4_p1,
            'c4_p2' => $this->c4_p2,
            'c4_p3' => $this->c4_p3,
            'c5_p1' => $this->c5_p1,
            'c5_p2' => $this->c5_p2,
            'c5_p3' => $this->c5_p3,
            'c6_p1' => $this->c6_p1,
            'c6_p2' => $this->c6_p2,
            'c6_p3' => $this->c6_p3,
            'fecha_registro' => $this->fecha_registro,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'seccion', $this->seccion])
            ->andFilterWhere(['like', 'aspecto_abordado', $this->aspecto_abordado])
            ->andFilterWhere(['like', 'compromisos', $this->compromisos]);

        return $dataProvider;
    }
}
