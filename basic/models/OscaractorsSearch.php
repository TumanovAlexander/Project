<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Oscaractors;

/**
 * OscaractorsSearch represents the model behind the search form of `app\modules\admin\models\Oscaractors`.
 */
class OscaractorsSearch extends Oscaractors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_osac', 'id_actor_osac'], 'integer'],
            [['date_osac', 'nomination_osac'], 'safe'],
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
        $query = Oscaractors::find();

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
            'id_osac' => $this->id_osac,
            'date_osac' => $this->date_osac,
            'id_actor_osac' => $this->id_actor_osac,
        ]);

        $query->andFilterWhere(['like', 'nomination_osac', $this->nomination_osac]);

        return $dataProvider;
    }
}
