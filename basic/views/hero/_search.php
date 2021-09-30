<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\HeroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hero-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_hero') ?>

    <?= $form->field($model, 'hero_name') ?>

    <?= $form->field($model, 'hero_description') ?>

    <?= $form->field($model, 'id_film_hero') ?>

    <?= $form->field($model, 'id_actor_hero') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
