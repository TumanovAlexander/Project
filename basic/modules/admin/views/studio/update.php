<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Studio */

$this->title = 'Изменить Студию: ' . $model->studio_name;
$this->params['breadcrumbs'][] = ['label' => 'Studios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_studio, 'url' => ['view', 'id' => $model->id_studio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studio-update">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
