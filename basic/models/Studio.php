<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studio".
 *
 * @property int $id_studio
 * @property string $studio_name
 * @property string $creation_date
 * @property string $creator_name
 * @property string $studio_img
 *
 * @property Film[] $films
 */
class Studio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studio_name', 'creation_date', 'creator_name', 'studio_img'], 'required'],
            [['creation_date'], 'safe'],
            [['studio_name', 'creator_name'], 'string', 'max' => 120],
            [['studio_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_studio' => 'Номер студии',
            'studio_name' => 'Название студии',
            'creation_date' => 'Дата создания',
            'creator_name' => 'Имя создателя',
            'studio_img' => 'Имя изображения',
        ];
    }

    /**
     * Gets query for [[Films]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Film::className(), ['id_studio_film' => 'id_studio']);
    }
}
