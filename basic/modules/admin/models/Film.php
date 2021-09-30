<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property int $id_film
 * @property string $film_name
 * @property string $date
 * @property int $rating_imdb
 * @property int $budget
 * @property int $box_office
 * @property int $lenght
 * @property int $id_studio_film
 * @property int $id_director_film
 * @property int $id_genre_film
 * @property int $film_img
 *
 * @property Comment[] $comments
 * @property Genre $genreFilm
 * @property Studio $studioFilm
 * @property Director $directorFilm
 * @property Hero[] $heroes
 * @property Library[] $libraries
 * @property OscarFilms[] $oscarFilms
 * @property Userrate[] $userrates
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['film_name', 'date', 'rating_imdb', 'budget', 'box_office', 'lenght', 'id_studio_film', 'id_director_film', 'id_genre_film', 'film_img'], 'required'],
            [['date'], 'safe'],
            [['rating_imdb', 'budget', 'box_office', 'lenght', 'id_studio_film', 'id_director_film', 'id_genre_film'], 'integer'],
            [['film_name', 'film_img'], 'string', 'max' => 225],
			[['description'], 'string'],
            [['id_genre_film'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['id_genre_film' => 'id_genre']],
            [['id_studio_film'], 'exist', 'skipOnError' => true, 'targetClass' => Studio::className(), 'targetAttribute' => ['id_studio_film' => 'id_studio']],
            [['id_director_film'], 'exist', 'skipOnError' => true, 'targetClass' => Director::className(), 'targetAttribute' => ['id_director_film' => 'id_director']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_film' => 'Номер фильма',
            'film_name' => 'Название фильма',
            'date' => 'Дата выхода',
            'rating_imdb' => 'Рейтинг Imdb',
            'budget' => 'Бюджет',
            'box_office' => 'Сборы',
            'lenght' => 'Длительность',
			'description' => 'Описание фильма',
            'id_studio_film' => 'Студия',
            'id_director_film' => 'Режиссер',
            'id_genre_film' => 'Жанр',
            'film_img' => 'Имя изображения',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['id_film_comment' => 'id_film']);
    }

    /**
     * Gets query for [[GenreFilm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenreFilm()
    {
        return $this->hasOne(Genre::className(), ['id_genre' => 'id_genre_film']);
    }

    /**
     * Gets query for [[StudioFilm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudioFilm()
    {
        return $this->hasOne(Studio::className(), ['id_studio' => 'id_studio_film']);
    }

    /**
     * Gets query for [[DirectorFilm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirectorFilm()
    {
        return $this->hasOne(Director::className(), ['id_director' => 'id_director_film']);
    }

    /**
     * Gets query for [[Heroes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHeroes()
    {
        return $this->hasMany(Hero::className(), ['id_film_hero' => 'id_film']);
    }

    /**
     * Gets query for [[Libraries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLibraries()
    {
        return $this->hasMany(Library::className(), ['id_film_library' => 'id_film']);
    }

    /**
     * Gets query for [[OscarFilms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOscarFilms()
    {
        return $this->hasMany(OscarFilms::className(), ['id_film_osfilm' => 'id_film']);
    }

    /**
     * Gets query for [[Userrates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserrates()
    {
        return $this->hasMany(Userrate::className(), ['id_film_rate' => 'id_film']);
    }
}

