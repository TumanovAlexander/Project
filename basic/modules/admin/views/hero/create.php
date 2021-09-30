<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Hero */

$this->title = 'Create Hero';
$this->params['breadcrumbs'][] = ['label' => 'Heroes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hero-create">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
	</div>
</div>
