<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "hero".
 *
 * @property int $id_hero
 * @property string $hero_name
 * @property string $hero_description
 * @property int $id_film_hero
 * @property int $id_actor_hero
 *
 * @property Film $filmHero
 * @property Actor $actorHero
 */
class Hero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hero_name', 'hero_description', 'id_film_hero', 'id_actor_hero'], 'required'],
            [['id_film_hero', 'id_actor_hero'], 'integer'],
            [['hero_name', 'hero_description'], 'string', 'max' => 120],
            [['id_film_hero'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['id_film_hero' => 'id_film']],
            [['id_actor_hero'], 'exist', 'skipOnError' => true, 'targetClass' => Actor::className(), 'targetAttribute' => ['id_actor_hero' => 'id_actor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hero' => 'Номер персонажа',
            'hero_name' => 'Имя персонажа',
            'hero_description' => 'Описание персонажа',
            'id_film_hero' => 'Номер фильма',
            'id_actor_hero' => 'Номер актера',
        ];
    }

    /**
     * Gets query for [[FilmHero]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilmHero()
    {
        return $this->hasOne(Film::className(), ['id_film' => 'id_film_hero']);
    }

    /**
     * Gets query for [[ActorHero]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActorHero()
    {
        return $this->hasOne(Actor::className(), ['id_actor' => 'id_actor_hero']);
    }
}
