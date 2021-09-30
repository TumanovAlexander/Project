<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Director;

/**
 * DirectorSearch represents the model behind the search form of `app\modules\admin\models\Director`.
 */
class DirectorSearch extends Director
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_director'], 'integer'],
            [['director_name', 'birthday', 'nation', 'direcot_img'], 'safe'],
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
        $query = Director::find();

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
            'id_director' => $this->id_director,
            'birthday' => $this->birthday,
        ]);

        $query->andFilterWhere(['like', 'director_name', $this->director_name])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'direcot_img', $this->direcot_img]);

        return $dataProvider;
    }
}
