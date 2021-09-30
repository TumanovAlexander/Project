<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Hero;

/**
 * HeroSearch represents the model behind the search form of `app\modules\admin\models\Hero`.
 */
class HeroSearch extends Hero
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hero', 'id_film_hero', 'id_actor_hero'], 'integer'],
            [['hero_name', 'hero_description'], 'safe'],
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
        $query = Hero::find();

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
            'id_hero' => $this->id_hero,
            'id_film_hero' => $this->id_film_hero,
            'id_actor_hero' => $this->id_actor_hero,
        ]);

        $query->andFilterWhere(['like', 'hero_name', $this->hero_name])
            ->andFilterWhere(['like', 'hero_description', $this->hero_description]);

        return $dataProvider;
    }
}
