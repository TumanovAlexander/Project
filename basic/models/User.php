<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;
use yii\base\model;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    /*public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];*/


    /**
     * {@inheritdoc}
     */
	 
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

	public static function tableName()
	{
		return 'user';
	}
    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
   public static function findByUsername($username)
    {
        return static::findOne(['username'=>$username]);
    }

    /**
     * {@inheritdoc}
     */
   public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
   public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
   public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

	public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
   public function validatePassword($password_hash)
    {
        return Yii::$app->getSecurity()->generatePasswordHash('12345');
    }
	 public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
}
