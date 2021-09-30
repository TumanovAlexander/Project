<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\LibrarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Библиотеки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="library-index">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>
	<p>
        <?= Html::a('Добавить библиотеку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_user_library',
            'id_film_library',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

	</div>
</div>
