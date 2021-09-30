<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Studio;

/**
 * StudioSearch represents the model behind the search form of `app\modules\admin\models\Studio`.
 */
class StudioSearch extends Studio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_studio'], 'integer'],
            [['studio_name', 'creation_date', 'creator_name', 'studio_img'], 'safe'],
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
        $query = Studio::find();

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
            'id_studio' => $this->id_studio,
            'creation_date' => $this->creation_date,
        ]);

        $query->andFilterWhere(['like', 'studio_name', $this->studio_name])
            ->andFilterWhere(['like', 'creator_name', $this->creator_name])
            ->andFilterWhere(['like', 'studio_img', $this->studio_img]);

        return $dataProvider;
    }
}
