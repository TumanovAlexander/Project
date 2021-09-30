<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Userrate */

$this->title = 'Create Userrate';
$this->params['breadcrumbs'][] = ['label' => 'Userrates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userrate-create">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
	</div>
</div>
