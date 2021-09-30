<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Film */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="film-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'film_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'rating_imdb')->textInput() ?>

    <?= $form->field($model, 'budget')->textInput() ?>

    <?= $form->field($model, 'box_office')->textInput() ?>

    <?= $form->field($model, 'lenght')->textInput() ?>

    <?= $form->field($model, 'id_studio_film')->textInput() ?>

    <?= $form->field($model, 'id_director_film')->textInput() ?>

    <?= $form->field($model, 'id_genre_film')->textInput() ?>

    <?= $form->field($model, 'film_img')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
