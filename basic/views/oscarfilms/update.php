<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Oscarfilms */

$this->title = 'Изменить Оскар Фильма: ' . $model->id_osfilm;
$this->params['breadcrumbs'][] = ['label' => 'Oscarfilms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_osfilm, 'url' => ['view', 'id' => $model->id_osfilm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oscarfilms-update">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
