<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trainers;

/**
 * TrainersSearch represents the model behind the search form of `app\models\Trainers`.
 */
class TrainersSearch extends Trainers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTrainers'], 'integer'],
            [['nameTrainer', 'emailTrainer', 'telTrainer', 'dicipline'], 'safe'],
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
        $query = Trainers::find();

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
            'idTrainers' => $this->idTrainers,
        ]);

        $query->andFilterWhere(['like', 'nameTrainer', $this->nameTrainer])
            ->andFilterWhere(['like', 'emailTrainer', $this->emailTrainer])
            ->andFilterWhere(['like', 'telTrainer', $this->telTrainer])
            ->andFilterWhere(['like', 'dicipline', $this->dicipline]);

        return $dataProvider;
    }
}
