<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Actor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actor-form">
	<div class="views">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'actor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_birthday')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actor_img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
	</div>
</div>
