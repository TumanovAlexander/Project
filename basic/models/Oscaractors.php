<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "oscaractors".
 *
 * @property int $id_osac
 * @property string $date_osac
 * @property string $nomination_osac
 * @property int $id_actor_osac
 *
 * @property Actor $actorOsac
 */
class Oscaractors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oscaractors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_osac', 'nomination_osac', 'id_actor_osac'], 'required'],
            [['date_osac'], 'safe'],
            [['id_actor_osac'], 'integer'],
            [['nomination_osac'], 'string', 'max' => 120],
            [['id_actor_osac'], 'exist', 'skipOnError' => true, 'targetClass' => Actor::className(), 'targetAttribute' => ['id_actor_osac' => 'id_actor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_osac' => 'Номер Оскара',
            'date_osac' => 'Дата вручения',
            'nomination_osac' => 'Номинация',
            'id_actor_osac' => 'Номер актера',
        ];
    }

    /**
     * Gets query for [[ActorOsac]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActorOsac()
    {
        return $this->hasOne(Actor::className(), ['id_actor' => 'id_actor_osac']);
    }
}
