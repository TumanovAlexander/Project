<?php

/* @var $this yii\web\View */
use app\modules\admin\models\Film;
use app\modules\admin\models\Genre;
use app\modules\admin\models\User;
use app\modules\admin\models\Userrate;
$this->title = 'Диплом Туманов';
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

<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<h3>Мстители: Финал</h3>
								<p>Трейлер самого масштабного кроссовера студии Marvel.<span class="over-para"> Не пропустите!</span></p>
								<a href="#small-dialog1" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Смотреть трейлер</h6>
								</a>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
								<div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
									<iframe src="https://player.vimeo.com/video/358205676" allow="autoplay; fullscreen"
										allowfullscreen=""></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<h3>Категории</h3>
								<p>Найдите фильм для вечера. <span class="over-para"> Найдите вечер для фильма!</span></p>
								<a href="category" class="play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Выбрать фильм</h6>
								</a>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<h3>Еще не зарегистрированы?</h3>
								<p>Скорее зарегистрируйтесь! <span class="over-para"> Фильмы не ждут!</span></p>
								<a href="signup" class="play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Зарегистрироваться</h6>
								</a>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<h3>Что Вам понравилось?</h3>
								<p>Восстановите в памяти самые замечательные моменты. <span class="over-para"> Вместе с WatchIT. </span></p>
								<?php echo '<a href="userv?id=' . Yii::$app->user->identity->id . '" class="play-view1">'; ?>
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Перейти в Личный Кабинет</h6>
								</a>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!--mid-slider -->
	<!-- //mid-slider-->
	<!--/tabs-->
	<?php $query4 = Film::find()->select('id_film, film_name, lenght, rating_imdb, film_img, year(date) as year')->asArray()->where(['like', 'film_name', $_GET['q']])->all();?>
	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li>Результаты поиска по запросу "<?php echo $_GET['q'];?>"</li>
							<div class="clear"></div>
						</ul>
						<?php if(!empty($query4)):?>
						<div class="resp-tabs-container hor_1">
							<div class="albums-content">
								<div class="row">
								<?php
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
												<?php echo '<a href="filmv?id='.$qu['id_film'].'">

													<img src="assets/images/'.$qu['film_img'].'" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>'; ?>
											</div>
											<div class="message">
												<p><?php echo $qu['year'] ?></p>
												<a class="author-book-title" <?php echo 'href="filmv?id='.$qu['id_film'].'">' ?><?php echo $qu['film_name'] ?></a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $qu['lenght'] ?> мин.

													</span>
													
												</h4>
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
						<?php
						else : echo '<h2> По вашему запросу ничего не найдено. </h2>';
						endif;
		 ?>
					</div>
				</div>
			</div>
		</div>
	</section>