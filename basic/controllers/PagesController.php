<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\SignupForm;
use app\models\User;
/**
 * Default controller for the `admin` module
 */
class PagesController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionCategory()
    {
        return $this->render('category');
    }

public function actionSignup(){
 if (!Yii::$app->user->isGuest) {
 return $this->goHome();
 }
 $model = new SignupForm();
 if($model->load(\Yii::$app->request->post()) && $model->validate()){
 $user = new User();
    $user->username = $model->username;
    $user->password = \Yii::$app->security->generatePasswordHash($model->password);
	$user->birthday_user = $model->birthday_user;
	$user->region = $model->region;
	$user->gender_user = $model->gender_user;
	$user->auth_key = \Yii::$app->security->generateRandomString();
     if($user->save()){
            return $this->goHome();
        }
 }

 return $this->render('signup', compact('model'));
}

	  public function actionSearch()
    {
        $q = Yii::$app->user->get('q');
		$query = Film::find()->where('like', 'film_name', 'q');
        return $this->render('search', compact('q'));
    }
}