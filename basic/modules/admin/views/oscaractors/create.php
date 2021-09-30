<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Oscaractors */

$this->title = 'Create Oscaractors';
$this->params['breadcrumbs'][] = ['label' => 'Oscaractors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oscaractors-create">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
	</div>
</div>
