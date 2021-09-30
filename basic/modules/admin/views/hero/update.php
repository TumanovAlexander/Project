<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Hero */

$this->title = 'Изменить Персонажа: ' . $model->hero_name;
$this->params['breadcrumbs'][] = ['label' => 'Heroes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_hero, 'url' => ['view', 'id' => $model->id_hero]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hero-update">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
