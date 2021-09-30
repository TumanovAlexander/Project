<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\OscardirectorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оскары режиссеров';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oscardirectors-index">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>
	<p>
        <?= Html::a('Добавить Оскар режиссера', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'date_osdir',
            'id_director_osdir',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

	</div>
</div>
