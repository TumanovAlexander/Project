<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Film;

/**
 * FilmSearch represents the model behind the search form of `app\modules\admin\models\Film`.
 */
class FilmSearch extends Film
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_film', 'rating_imdb', 'budget', 'box_office', 'lenght', 'id_studio_film', 'id_director_film', 'id_genre_film', 'film_img'], 'integer'],
            [['film_name', 'date'], 'safe'],
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
        $query = Film::find();

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
            'id_film' => $this->id_film,
            'date' => $this->date,
            'rating_imdb' => $this->rating_imdb,
            'budget' => $this->budget,
            'box_office' => $this->box_office,
            'lenght' => $this->lenght,
            'id_studio_film' => $this->id_studio_film,
            'id_director_film' => $this->id_director_film,
            'id_genre_film' => $this->id_genre_film,
            'film_img' => $this->film_img,
        ]);

        $query->andFilterWhere(['like', 'film_name', $this->film_name]);

        return $dataProvider;
    }
}
