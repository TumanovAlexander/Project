<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DirectorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="director-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_director') ?>

    <?= $form->field($model, 'director_name') ?>

    <?= $form->field($model, 'birthday') ?>

    <?= $form->field($model, 'nation') ?>

    <?= $form->field($model, 'direcot_img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
