<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property int $id_genre
 * @property string $genre_name
 * @property string $description
 *
 * @property Film[] $films
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre_name', 'description'], 'required'],
            [['genre_name', 'description'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_genre' => 'Номер жанра',
            'genre_name' => 'Название жанра',
            'description' => 'Описание жанра',
        ];
    }

    /**
     * Gets query for [[Films]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id_genre_film' => 'id_genre']);
    }
}
