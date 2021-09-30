<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Oscardirectors */

$this->title = 'Create Oscardirectors';
$this->params['breadcrumbs'][] = ['label' => 'Oscardirectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oscardirectors-create">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
	</div>
</div>
