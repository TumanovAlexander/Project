<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "director".
 *
 * @property int $id_director
 * @property string $director_name
 * @property string $birthday
 * @property string $nation
 * @property string $direcot_img
 *
 * @property Film[] $films
 * @property OscarDirectors[] $oscarDirectors
 */
class Director extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'director';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['director_name', 'birthday', 'nation', 'direcot_img'], 'required'],
            [['birthday'], 'safe'],
            [['director_name', 'nation'], 'string', 'max' => 120],
            [['direcot_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_director' => 'Номер режиссера',
            'director_name' => 'Имя режиссера',
            'birthday' => 'Дата рождения',
            'nation' => 'Национальность',
            'direcot_img' => 'Имя изображения',
        ];
    }

    /**
     * Gets query for [[Films]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id_director_film' => 'id_director']);
    }

    /**
     * Gets query for [[OscarDirectors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOscarDirectors()
    {
        return $this->hasMany(OscarDirectors::className(), ['id_director_osdir' => 'id_director']);
    }
}
