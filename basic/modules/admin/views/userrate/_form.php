<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Userrate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userrate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rate')->textInput() ?>

    <?= $form->field($model, 'id_user_rate')->textInput() ?>

    <?= $form->field($model, 'id_film_rate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
