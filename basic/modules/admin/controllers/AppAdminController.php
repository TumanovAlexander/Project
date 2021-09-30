<?php

namespace app\modules\admin\controllers;

use yii\web\controller;
use yii\filters\AccessControl;

class AppAdminController extends Controller
{
	public function behaviors()
	{
		return
		[
		'access' => [
		'class'=>AccessControl::className(),
		'rules'=>[
		[
			'allow'=>true,
			'roles'=>['@']
		]
		]
		]
		];
			
	}
	public function actionUpload(){
    $model = new UploadImage();
    if(Yii::$app->request->isPost){
        $model->image = UploadedFile::getInstance($model, 'image');
        $model->upload();
        return;
    }
    return $this->render('actor/_form', ['model' => $modelimg]);
	}
}
	