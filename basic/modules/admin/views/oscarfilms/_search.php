<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\OscarfilmsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oscarfilms-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_osfilm') ?>

    <?= $form->field($model, 'date_osfilm') ?>

    <?= $form->field($model, 'nomination') ?>

    <?= $form->field($model, 'id_film_osfilm') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
