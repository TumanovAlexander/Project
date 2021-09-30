<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Film;
use app\modules\admin\models\Studio;
use app\modules\admin\models\Genre;
use app\modules\admin\models\Director;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Film */

$this->title = 'Добавить фильм';
$this->params['breadcrumbs'][] = ['label' => 'Фильмы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-create">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'name_genre' => $name_genre,
		'name_studio' => $name_studio,
		'name_director' => $name_director,
    ]) ?>
	</div>
</div>
