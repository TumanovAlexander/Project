<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Actor */

$this->title = 'Изменить актера: ' . $model->actor_name;
$this->params['breadcrumbs'][] = ['label' => 'Actors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_actor, 'url' => ['view', 'id' => $model->id_actor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actor-update">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
