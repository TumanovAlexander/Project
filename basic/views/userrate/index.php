<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\UserrateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оценки пользователей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userrate-index">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>
	<p>
        <?= Html::a('Добавить оценку пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rate',
            'id_user_rate',
            'id_film_rate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

	</div>
</div>
