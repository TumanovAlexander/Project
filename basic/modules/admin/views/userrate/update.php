<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Userrate */

$this->title = 'Изменить Оценку пользователя: ' . $model->id_userrate;
$this->params['breadcrumbs'][] = ['label' => 'Userrates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_userrate, 'url' => ['view', 'id' => $model->id_userrate]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userrate-update">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
