<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "userrate".
 *
 * @property int $id_userrate
 * @property int $rate
 * @property int $id_user_rate
 * @property int $id_film_rate
 *
 * @property Film $filmRate
 * @property User $userRate
 */
class Userrate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userrate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rate', 'id_user_rate', 'id_film_rate'], 'required'],
            [['rate', 'id_user_rate', 'id_film_rate'], 'integer'],
            [['id_film_rate'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['id_film_rate' => 'id_film']],
            [['id_user_rate'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user_rate' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_userrate' => 'Номер оценки',
            'rate' => 'Оценка',
            'id_user_rate' => 'Номер пользователя',
            'id_film_rate' => 'Номер фильма',
        ];
    }

    /**
     * Gets query for [[FilmRate]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilmRate()
    {
        return $this->hasOne(Film::className(), ['id_film' => 'id_film_rate']);
    }

    /**
     * Gets query for [[UserRate]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserRate()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user_rate']);
    }
}
