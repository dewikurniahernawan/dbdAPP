<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\data;

/**
 * dataSearch represents the model behind the search form of `app\models\data`.
 */
class dataSearch extends data
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'timestamp', 'coordinates', 'ns_1', 'sex', 'prevd'], 'safe'],
            [['fday', 'age'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = data::find();

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
        if ($this->age == 0) {
            $age = array(0, 90);
        } elseif ($this->age == 1) {
            $age = array(0, 10);
        } elseif ($this->age == 2){
            $age = array(11, 20);
        } elseif ($this->age == 3) {
            $age = array(21, 30);
        } elseif ($this->age == 4) {
            $age = array(31, 40);
        } elseif ($this->age == 5) {
            $age = array(41, 50);
        } elseif ($this->age == 6) {
            $age = array(51, 60);
        } elseif ($this->age == 7){
            $age = array(61, 70);
        } elseif ($this->age == 8) {
            $age = array(71, 80);
        } elseif ($this->age == 9){
            $age = array(81, 90);
        }

        $query->andFilterWhere([
            'timestamp' => $this->timestamp,
            'fday' => $this->fday
        ]);

        $query->andFilterWhere(['between', 'age', $age[0], $age[1]]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'coordinates', $this->coordinates])
            ->andFilterWhere(['like', 'ns_1', $this->ns_1])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'prevd', $this->prevd]);

        return $dataProvider;
    }
}
