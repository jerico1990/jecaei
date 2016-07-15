<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CronogramaVisitaAei;

/**
 * CronogramaVisitaAeiSearch represents the model behind the search form about `app\models\CronogramaVisitaAei`.
 */
class CronogramaVisitaAeiSearch extends CronogramaVisitaAei
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'docente_id', 'visita', 'usuario_creador', 'estado'], 'integer'],
            [['codigo_modular', 'fecha_visita', 'fecha_registro'], 'safe'],
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
        $query = CronogramaVisitaAei::find();

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
            'docente_id' => $this->docente_id,
            'visita' => $this->visita,
            'fecha_visita' => $this->fecha_visita,
            'usuario_creador' => $this->usuario_creador,
            'fecha_registro' => $this->fecha_registro,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'codigo_modular', $this->codigo_modular]);

        return $dataProvider;
    }
}
