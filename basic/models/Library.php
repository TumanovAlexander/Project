<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "library".
 *
 * @property int $id_library
 * @property int $id_user_library
 * @property int $id_film_library
 *
 * @property Film $filmLibrary
 * @property User $userLibrary
 */
class Library extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'library';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user_library', 'id_film_library'], 'required'],
            [['id_user_library', 'id_film_library'], 'integer'],
            [['id_film_library'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['id_film_library' => 'id_film']],
            [['id_user_library'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user_library' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_library' => 'Id Library',
            'id_user_library' => 'Id User Library',
            'id_film_library' => 'Id Film Library',
        ];
    }

    /**
     * Gets query for [[FilmLibrary]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilmLibrary()
    {
        return $this->hasOne(Film::className(), ['id_film' => 'id_film_library']);
    }

    /**
     * Gets query for [[UserLibrary]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserLibrary()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user_library']);
    }
}
