<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Film;
use app\models\Genre;
use app\models\Userrate;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Film */

$this->title = $model->film_name;
$model->id_studio_film = $name_studio->studio_name;
$model->id_director_film = $name_director->director_name;
$model->id_genre_film = $name_genre->genre_name;
$this->params['breadcrumbs'][] = ['label' => 'Films', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$arrayid = [];
$schet = 0;
$query = Userrate::find()->select('id_film_rate, id_user_rate')->asArray()
		->where(['=', 'id_user_rate', Yii::$app->user->identity->id])->all();
foreach($query as $qu)
		{
			$arrayid[$schet]= $qu['id_film_rate'];
			$schet++;
		}
?>

<style>
.aligment{
	padding: 30px 0;
}
.like{
	display:flex;
	width:100%;
	justify-content:center;
	margin: 20px 0;
}
.like_btn{
	width:100%;
	height: 50px;
.head{
	margin: 40px 0;
	font-size: 45px;
}
.main_head{
	text-align: center;
}
.text_size{
	font-size: 25px;
}
</style>
<div class="film-view">
	<div class="views">


<div class="container">

  <div class="row">
    <div class="col-4">
      <div class="col aligment">
					<?php
						$img = '';
						$query2 = Film::find()->select('film_img, id_film, description')
						->where(['=', 'id_film', $model->id_film])->all();
						foreach ($query2 as $qu)
						{
							$ajaxbutton = 'ajax';
		$noajax = 'ajaxdis';
		$idbuttonajax = $qu['id_film'].$ajaxbutton;
		$idbuttonajaxdis = $qu['id_film'].$noajax;
							$img = $qu['film_img'];
							for($i=0; $i<$schet; $i++)
		{
			if($qu['id_film'] != $arrayid[$i])
			{
				$buttonidlike = '<div id="'.$idbuttonajax.'"><button type="button" class="'.$model->id_film.' btn btn-outline-danger like_btn btn-lg">Нравится</button></div>';
				$buttonidlikedis = '<div id="'.$idbuttonajaxdis.'" style="display: none;"><button type="button" class="'.$model->id_film.' dislike btn btn-outline-danger like_btn btn-lg">Нравится</button></div>';
			}
			else
			{
				$buttonidlike = '<div id="'.$idbuttonajax.'" style="display: none;"><button type="button" class="'.$model->id_film.' btn btn-outline-danger like_btn btn-lg">Нравится</button></div>';
				$buttonidlikedis = '<div id="'.$idbuttonajaxdis.'"><button type="button" class="'.$model->id_film.' dislike btn btn-outline-danger like_btn btn-lg">Нравится</button></div>';
				break;			
			}
		}
					 echo '<img class="card-img-top main_img" src="assets/images/'.$qu['film_img'].'" alt="" >'  ?>
				</div>	
				<div class="col like">
					<?php echo  $buttonidlike; echo $buttonidlikedis;?>
				</div>	
						<?php } ?>				
    </div>
    <div class="col">
		<h1 class="main_head"><?= Html::encode($this->title) ?></h1>
	<?php 	echo '<h5 style="font-weight:normal; padding: 15px 0;">'.$qu['description'].'</h5>';?>
      <h1 class="">О фильме</h1>
	  <?= DetailView::widget([
					'model' => $model,
					'attributes' => [
						'date',
						'rating_imdb',
						[
							'attribute'=>'budget',
							'value' => ''.$model->budget.' миллионов долларов',
							'format' => 'raw',
						],
						[
							'attribute'=>'box_office',
							'value' => ''.$model->box_office.' миллионов долларов',
							'format' => 'raw',
						],
						[
							'attribute'=>'lenght',
							'value' => ''.$model->lenght.' минут',
							'format' => 'raw',
						],
						'id_studio_film',
						'id_director_film',
						'id_genre_film',
					],
					]) ?>					
    </div>
  </div>
</div>




    
	</div>
</div>
