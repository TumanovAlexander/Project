<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "oscarfilms".
 *
 * @property int $id_osfilm
 * @property string $date_osfilm
 * @property string $nomination
 * @property int $id_film_osfilm
 *
 * @property Film $filmOsfilm
 */
class Oscarfilms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oscarfilms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_osfilm', 'nomination', 'id_film_osfilm'], 'required'],
            [['date_osfilm'], 'safe'],
            [['id_film_osfilm'], 'integer'],
            [['nomination'], 'string', 'max' => 120],
            [['id_film_osfilm'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['id_film_osfilm' => 'id_film']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_osfilm' => 'Номер Оскара',
            'date_osfilm' => 'Дата вручения',
            'nomination' => 'Номинация',
            'id_film_osfilm' => 'Номер фильма',
        ];
    }

    /**
     * Gets query for [[FilmOsfilm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilmOsfilm()
    {
        return $this->hasOne(Film::className(), ['id_film' => 'id_film_osfilm']);
    }
}
