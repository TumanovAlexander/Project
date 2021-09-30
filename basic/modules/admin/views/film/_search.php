<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FilmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="film-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_film') ?>

    <?= $form->field($model, 'film_name') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'rating_imdb') ?>

    <?= $form->field($model, 'budget') ?>

    <?php // echo $form->field($model, 'box_office') ?>

    <?php // echo $form->field($model, 'lenght') ?>

    <?php // echo $form->field($model, 'id_studio_film') ?>

    <?php // echo $form->field($model, 'id_director_film') ?>

    <?php // echo $form->field($model, 'id_genre_film') ?>

    <?php // echo $form->field($model, 'film_img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
