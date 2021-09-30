<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Studio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studio_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creation_date')->textInput() ?>

    <?= $form->field($model, 'creator_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'studio_img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
