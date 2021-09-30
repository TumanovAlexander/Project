<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\OscaractorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oscaractors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_osac') ?>

    <?= $form->field($model, 'date_osac') ?>

    <?= $form->field($model, 'nomination_osac') ?>

    <?= $form->field($model, 'id_actor_osac') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
