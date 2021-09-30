<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\FilmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фильмы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-index">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>
	<p>
        <?= Html::a('Добавить фильм', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'film_name',
            'date',
            'rating_imdb',
            'budget',
            //'box_office',
            //'lenght',
            //'id_studio_film',
            //'id_director_film',
            //'id_genre_film',
            //'film_img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

	</div>
</div>
