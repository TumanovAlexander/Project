<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\GenreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Жанры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-index">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>
	<p>
        <?= Html::a('Добавить жанр', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'genre_name',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

	</div>
</div>
