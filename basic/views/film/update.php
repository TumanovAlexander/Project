<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Film */

$this->title = 'Изменить Фильм: ' . $model->film_name;
$this->params['breadcrumbs'][] = ['label' => 'Films', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_film, 'url' => ['view', 'id' => $model->id_film]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="film-update">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
