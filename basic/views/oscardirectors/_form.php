<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Oscardirectors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oscardirectors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_osdir')->textInput() ?>

    <?= $form->field($model, 'id_director_osdir')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
