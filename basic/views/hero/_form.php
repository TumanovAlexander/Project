<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Hero */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hero-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hero_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hero_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_film_hero')->textInput() ?>

    <?= $form->field($model, 'id_actor_hero')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
