<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\OscaractorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оскары актеров';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oscaractors-index">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>
	<p>
        <?= Html::a('Добавить Оскар актера', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'date_osac',
            'nomination_osac',
            'id_actor_osac',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	</div>

</div>
