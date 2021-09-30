<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Oscaractors */

$this->title = 'Изменить Оскар Актера: ' . $model->id_osac;
$this->params['breadcrumbs'][] = ['label' => 'Oscaractors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_osac, 'url' => ['view', 'id' => $model->id_osac]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oscaractors-update">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
