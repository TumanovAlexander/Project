<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Oscaractors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oscaractors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_osac')->textInput() ?>

    <?= $form->field($model, 'nomination_osac')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_actor_osac')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
