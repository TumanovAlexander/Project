<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ActorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Актеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>

</style>

<div class="actor-index">
<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>
	<p>
        <?= Html::a('Добавить Актера', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'actor_name',
            'actor_birthday',
            'gender',
            'actor_img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	</div>
</div>
