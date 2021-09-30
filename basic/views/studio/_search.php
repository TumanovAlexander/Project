<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\StudioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_studio') ?>

    <?= $form->field($model, 'studio_name') ?>

    <?= $form->field($model, 'creation_date') ?>

    <?= $form->field($model, 'creator_name') ?>

    <?= $form->field($model, 'studio_img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
