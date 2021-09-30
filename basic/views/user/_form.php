<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday_user')->textInput() ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->dropDownList([
    '0' => 'Северная Америка',
    '1' => 'Южная Америка',
    '2'=>'Европа',
	'3' => 'Азия',
    '4' => 'Африка',
    '5'=>'Океания']); ?>

    <?= $form->field($model, 'gender_user')->dropDownList([
    '0' => 'Мужской',
    '1' => 'Женский']); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
