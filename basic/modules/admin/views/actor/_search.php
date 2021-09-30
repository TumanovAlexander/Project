<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ActorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_actor') ?>

    <?= $form->field($model, 'actor_name') ?>

    <?= $form->field($model, 'actor_birthday') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'actor_img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
