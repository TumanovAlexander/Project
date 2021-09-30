<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Oscardirectors */

$this->title = 'Изменить Оскар Директора: ' . $model->id_osdir;
$this->params['breadcrumbs'][] = ['label' => 'Oscardirectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_osdir, 'url' => ['view', 'id' => $model->id_osdir]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oscardirectors-update">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
