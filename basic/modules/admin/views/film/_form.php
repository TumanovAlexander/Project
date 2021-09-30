<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Film */
/* @var $form yii\widgets\ActiveForm */
$array1 = [];
foreach ($name_genre as $val) {
    $array1[$val->id_genre] = $val->genre_name;
}
$array2 = [];
foreach ($name_studio as $val) {
    $array2[$val->id_studio] = $val->studio_name;
}

$array3 = [];
foreach ($name_director as $val) {
    $array3[$val->id_director] = $val->director_name;
}
?>

<div class="film-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'film_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'rating_imdb')->textInput() ?>

    <?= $form->field($model, 'budget')->textInput() ?>

    <?= $form->field($model, 'box_office')->textInput() ?>

    <?= $form->field($model, 'lenght')->textInput() ?>
	
	<?= $form->field($model, 'description')->textInput() ?>

    <?= $form->field($model, 'id_studio_film')->dropDownList($array2,[]) ?>

    <?= $form->field($model, 'id_director_film')->dropDownList($array3,[]) ?>

    <?= $form->field($model, 'id_genre_film')->dropDownList($array1,[]) ?>

    <?= $form->field($model, 'film_img')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
