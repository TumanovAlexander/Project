<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int $id_actor
 * @property string $actor_name
 * @property string $actor_birthday
 * @property string $gender
 * @property string $actor_img
 *
 * @property Hero[] $heroes
 * @property OscarActors[] $oscarActors
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['actor_name', 'actor_birthday', 'gender', 'actor_img'], 'required'],
            [['actor_birthday'], 'safe'],
            [['actor_name', 'gender'], 'string', 'max' => 120],
            [['actor_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_actor' => 'Номер актера',
            'actor_name' => 'Имя актера',
            'actor_birthday' => 'Дата рождения',
            'gender' => 'Пол',
            'actor_img' => 'Имя изображения',
        ];
    }

    /**
     * Gets query for [[Heroes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHeroes()
    {
        return $this->hasMany(Hero::className(), ['id_actor_hero' => 'id_actor']);
    }

    /**
     * Gets query for [[OscarActors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOscarActors()
    {
        return $this->hasMany(OscarActors::className(), ['id_actor_osac' => 'id_actor']);
    }
}
