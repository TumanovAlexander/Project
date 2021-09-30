<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $birthday_user
 * @property string $password
 * @property string $auth_key
 * @property string $region
 * @property string $gender_user
 *
 * @property Comment[] $comments
 * @property Library[] $libraries
 * @property Userrate[] $userrates
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'birthday_user', 'password', 'region', 'gender_user'], 'required'],
            [['birthday_user'], 'safe'],
			[['auth_key'], 'default', 'value'=>0],
			[['role'], 'default', 'value'=>'Пользователь'],
            [['username', 'password', 'auth_key', 'region', 'gender_user', 'role'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'username' => 'Имя пользователя',
            'birthday_user' => 'Дата рождения',
            'password' => 'Пароль',
            'auth_key' => 'Код аутентификации',
            'region' => 'Регион',
            'gender_user' => 'Пол',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['id_user_comment' => 'id']);
    }

    /**
     * Gets query for [[Libraries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLibraries()
    {
        return $this->hasMany(Library::className(), ['id_user_library' => 'id']);
    }

    /**
     * Gets query for [[Userrates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserrates()
    {
        return $this->hasMany(Userrate::className(), ['id_user_rate' => 'id']);
    }
}
