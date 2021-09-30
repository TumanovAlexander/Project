<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Director */

$this->title = 'Изменить Режиссера: ' . $model->director_name;
$this->params['breadcrumbs'][] = ['label' => 'Directors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_director, 'url' => ['view', 'id' => $model->id_director]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="director-update">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
