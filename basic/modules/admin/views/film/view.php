<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Film */

$this->title = $model->film_name;
$model->id_studio_film = $name_studio->studio_name;
$model->id_director_film = $name_director->director_name;
$model->id_genre_film = $name_genre->genre_name;
$this->params['breadcrumbs'][] = ['label' => 'Фильмы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="film-view">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id_film], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_film], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить данный элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_film',
            'film_name',
            'date',
            'rating_imdb',
            'budget',
            'box_office',
            'lenght',
			'description',
            'id_studio_film',
            'id_director_film',
            'id_genre_film',
            'film_img',
        ],
    ]) ?>
	</div>
</div>
