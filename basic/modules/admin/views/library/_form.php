<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Library */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="library-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user_library')->textInput() ?>

    <?= $form->field($model, 'id_film_library')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
