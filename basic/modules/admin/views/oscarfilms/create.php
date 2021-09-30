<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Oscarfilms */

$this->title = 'Create Oscarfilms';
$this->params['breadcrumbs'][] = ['label' => 'Oscarfilms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oscarfilms-create">
	
    <h1><?= Html::encode($this->title) ?></h1>
	<div class="views">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
	</div>
</div>
