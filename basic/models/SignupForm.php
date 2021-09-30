<?php
namespace app\models;
use yii\base\Model;
 
class SignupForm extends Model{
    
    public $username;
    public $password;
	public $birthday_user;
    public $region;
	public $gender_user;
    public $auth_key;
	public $role;
    
    public function rules() {
        return [
            [['username', 'password','birthday_user', 'region', 'gender_user' ], 'required', 'message' => 'Заполните поле'],
			[['auth_key'], 'default', 'value'=>0],
			['username', 'unique', 'targetClass' => User::className(),  'message' => 'Этот логин уже занят'],
			['role', 'default', 'value'=>"Пользователь"],
        ];
    }
    
    public function attributeLabels() {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
			'birthday_user' => 'Дата рождения',
            'region' => 'Регион',
            'gender_user' => 'Пол',
        ];
    }
    
}