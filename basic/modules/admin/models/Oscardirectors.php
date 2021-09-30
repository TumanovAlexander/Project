<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "oscardirectors".
 *
 * @property int $id_osdir
 * @property string $date_osdir
 * @property int $id_director_osdir
 *
 * @property Director $directorOsdir
 */
class Oscardirectors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oscardirectors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_osdir', 'id_director_osdir'], 'required'],
            [['date_osdir'], 'safe'],
            [['id_director_osdir'], 'integer'],
            [['id_director_osdir'], 'exist', 'skipOnError' => true, 'targetClass' => Director::className(), 'targetAttribute' => ['id_director_osdir' => 'id_director']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_osdir' => 'Номер Оскара',
            'date_osdir' => 'Дата вручения',
            'id_director_osdir' => 'Номер режиссера',
        ];
    }

    /**
     * Gets query for [[DirectorOsdir]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirectorOsdir()
    {
        return $this->hasOne(Director::className(), ['id_director' => 'id_director_osdir']);
    }
}
