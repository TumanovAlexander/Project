<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Director */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="director-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'director_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->input('text') ?>

    <?= $form->field($model, 'nation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direcot_img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
