<?php

namespace app\models\crud1;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\crud1\Test1;

/**
 * Test1Search represents the model behind the search form about `app\models\crud1\Test1`.
 */
class Test1Search extends Test1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campoa', 'id_test2', 'campof'], 'integer'],
            [['campob', 'campod', 'campoe'], 'safe'],
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
        $query = Test1::find();

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
            'campoa' => $this->campoa,
            'campoe' => $this->campoe,
            'campof' => $this->campof,
            'id_test2' => $this->id_test2,
        ]);

        $query->andFilterWhere(['like', 'campob', $this->campob])
            ->andFilterWhere(['like', 'campod', $this->campod]);

        return $dataProvider;
    }
}
