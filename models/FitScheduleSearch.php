<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FitSchedule;

/**
 * FitScheduleSearch represents the model behind the search form of `app\models\FitSchedule`.
 */
class FitScheduleSearch extends FitSchedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFitSchedule', 'idCategories'], 'integer'],
            [['Name', 'Description', 'DatePosted'], 'safe'],
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
        $query = FitSchedule::find();

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
            'idFitSchedule' => $this->idFitSchedule,
            'idCategories' => $this->idCategories,
            'DatePosted' => $this->DatePosted,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
