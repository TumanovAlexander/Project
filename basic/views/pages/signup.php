<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
 <div class="views">
<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password')->passwordInput((['minlength'=>7])) ?>
 <?= $form->field($model, 'region')->dropDownList([
    'Северная Америка' => 'Северная Америка',
    'Южная Америка' => 'Южная Америка',
    'Европа'=>'Европа',
	'Азия' => 'Азия',
    'Африка' => 'Африка',
    'Океания'=>'Океания']); ?>

    <?= $form->field($model, 'gender_user')->dropDownList([
    'Мужской' => 'Мужской',
    'Женский' => 'Женский']); ?>
	<?= $form->field($model, 'birthday_user')->textInput() ?>
<div class="form-group">
    <div>
        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
</div>