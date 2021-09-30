<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Film;
use app\modules\admin\models\Userrate;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
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
<div class="user-view">
	<div class="views">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'birthday_user',
            'region',
            'gender_user',
        ],
    ]) ?>
	
	<p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
	</div>
</div>

<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">

						<ul class="resp-tabs-list hor_1">
						<table width="100%"><tr>
							<td width="50%"><li>Вам понравилось</li></td>
							<div class="clear"></div>
							</tr>
						</table>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div class="albums-content">
								<div class="row">
								<?php
								
		$query4 = Film::find()->select('id_film, film_name, lenght, rating_imdb, film_img, year(date) as year, id, id_user_rate, id_film_rate')
		->innerJoin('userrate', 'userrate.id_film_rate=film.id_film')->innerJoin('user', 'user.id=userrate.id_user_rate')->asArray()
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->andWhere(['=', 'id_user_rate', Yii::$app->user->identity->id])->all();
		foreach ($query4 as $qu)
		{
			for($i=0; $i<$schet; $i++)
		{
			if($qu['id_film'] != $arrayid[$i])
			{
				$buttonidlike = '<div id="'.$idbuttonajax.'"><button class="'.$qu['id_film'].' like" ><span class="post fa fa-heart liked"></span></button></div>';
				$buttonidlikedis = '<div id="'.$idbuttonajaxdis.'" style="display: none;"><button class="'.$qu['id_film'].' dislike"><span class="post fa fa-heart liked1" style="color: grey"></span></button></div>';
			}
			else
			{
				$buttonidlike = '<div id="'.$idbuttonajax.'" style="display: none;"><button class="'.$qu['id_film'].' like" ><span class="post fa fa-heart liked"></span></button></div>';
				$buttonidlikedis = '<div id="'.$idbuttonajaxdis.'"><button class="'.$qu['id_film'].' dislike"><span class="post fa fa-heart liked1" style="color: grey"></span></button></div>';
				break;			
			}
		}
		 ?>
									<!--/set1-->
									<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<?php echo '<a href="http://basic/web/index.php?r=film%2Fview&id='.$qu['id_film'].'">

													<img src="assets/images/'.$qu['film_img'].'" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>'; ?>
											</div>
											<div class="message">
												<p><?php echo $qu['year'] ?></p>
												<a class="author-book-title" href="genre.html"><?php echo $qu['film_name'] ?></a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $qu['lenght'] ?> мин.

													</span></h4>
												<?php echo $buttonidlike; echo $buttonidlikedis; ?>
													
											</div>
										</div>

									</div>
									<?php
		}
		 ?>
									<!--//set1-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
