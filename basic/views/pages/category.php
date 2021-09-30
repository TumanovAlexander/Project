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
	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">

						<ul class="resp-tabs-list hor_1">
						<table width="100%">
						<?php
		$query = Genre::find()->select('id_genre, genre_name')->all();
		$i=0;
		$genre = [];
		foreach ($query as $qu)
		{
			if($i==0 || $i%2==0)
				echo '<tr>';
			
							echo '<td width="50%"><li>'.$qu->genre_name.'</li></td>';
							
							if($i+1%2==0)
				echo '</tr>';
			$genre[$i] = $qu->id_genre;
			$i++;
		}
		 ?>
		 </table>
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container hor_1">
						<?php
						$i=0;
						foreach ($query as $qu1)
		{?>
							<div class="albums-content">
								<div class="row">
								<?php
		$query4 = Film::find()->select('id_film, film_name, lenght, rating_imdb, film_img, year(date) as year')->asArray()
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->andWhere(['=', 'id_genre_film', $genre[$i]])->all();
		foreach ($query4 as $qu)
		{
			for($g=0; $g<$schet; $g++)
		{
			if($qu['id_film'] != $arrayid[$g])
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
							<?php $i++;
		}
		 ?>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</section>
	
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Вам может понравиться</h3>
						</div>
					</div>
				</div>
				<div class="owl-three owl-carousel owl-theme">
				<?php
		$query0 = Film::find()->select('id_genre_film, count(id_genre_film) as countg')
		->innerJoin('userrate', 'userrate.id_film_rate=film.id_film')->innerJoin('user', 'user.id=userrate.id_user_rate')->asArray()
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->andWhere(['=', 'id_user_rate', Yii::$app->user->identity->id])->groupBy('id_genre_film')->orderBy('countg DESC')->all();

		$queryx = Film::find()->select('id_film')
		->innerJoin('userrate', 'userrate.id_film_rate=film.id_film')->innerJoin('user', 'user.id=userrate.id_user_rate')->asArray()
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->andWhere(['=', 'id_user_rate', Yii::$app->user->identity->id])->all();
		
		$query = Film::find()->select('id_film, film_name, lenght, film_img')
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->andWhere(['in', 'id_genre_film', $query0])->andWhere(['not in', 'id_film', $queryx])->limit(10)->all();
		foreach ($query as $qu)
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
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<?php echo '<a href="filmv?id='.$qu->id_film.'">'  ?>
								<figure>
									<?php echo '<img class="img-fluid" src="assets/images/'.$qu->film_img.'" alt="">'  ?>
								</figure>
								<div class="box-content">
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $qu->lenght ?> мин.

										</span>
									</h4>
									<?php echo $buttonidlike; echo $buttonidlikedis; ?>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" <?php echo 'href="filmv?id='.$qu['id_film'].'">' ?><?php echo $qu->film_name; ?></a></h3>
						<div class="button-center text-center mt-4">
							<?php echo '<a href="filmv?id='.$qu->id_film.'" class="btn watch-button">Подробнее...</a>'  ?>
						</div>

					</div>
					<?php
		}
		 ?>
				</div>
			</div>

		</div>
	</section>
	
	
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Нравится пользователям Вашего региона</h3>
						</div>
					</div>
				</div>
				<div class="owl-three owl-carousel owl-theme">
				<?php

		$queryt = Film::find()->select('id_film, film_name, lenght, film_img')
		->innerJoin('userrate', 'userrate.id_film_rate=film.id_film')->innerJoin('user', 'user.id=userrate.id_user_rate')
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->andWhere(['=', 'user.region', Yii::$app->user->identity->region])->
		andWhere(['<>', 'userrate.id_user_rate', Yii::$app->user->identity->id])->limit(10)->all();

		foreach ($queryt as $qu)
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
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<?php echo '<a href="http://basic/web/index.php?r=film%2Fview&id='.$qu->id_film.'">'  ?>
								<figure>
									<?php echo '<img class="img-fluid" src="assets/images/'.$qu->film_img.'" alt="">'  ?>
								</figure>
								<div class="box-content">
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $qu->lenght ?> мин.

										</span>
									</h4>
									<?php echo $buttonidlike; echo $buttonidlikedis; ?>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" <?php echo 'href="filmv?id='.$qu['id_film'].'">' ?><?php echo $qu->film_name; ?></a></h3>
						<div class="button-center text-center mt-4">
							<?php echo '<a href="filmv?id='.$qu->id_film.'" class="btn watch-button">Подробнее...</a>'  ?>
						</div>

					</div>
					<?php
		}
		 ?>
				</div>
			</div>

		</div>
	</section>
	
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Нравится пользователям Вашего возраста</h3>
						</div>
					</div>
				</div>
				<div class="owl-three owl-carousel owl-theme">
				<?php
		$quser = User::find()->select('year(birthday_user) as year')->asArray()
		->where(['=', 'username', Yii::$app->user->identity->username])->all();
		foreach ($quser as $qu)
		{
			$yearu = $qu['year'];
		}
		
		$querybirth = Film::find()->select('id_film, film_name, lenght, film_img, year(birthday_user)+5 as ryear, year(birthday_user)-5 as lyear')
		->innerJoin('userrate', 'userrate.id_film_rate=film.id_film')->innerJoin('user', 'user.id=userrate.id_user_rate')
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->
		andWhere(['<>', 'userrate.id_user_rate', Yii::$app->user->identity->id])->
		groupBy(['id_film', 'film_name', 'lenght', 'film_img', 'ryear', 'lyear'])
		->having(['>=', 'ryear', $yearu])->
		andHaving(['<=', 'lyear', $yearu])->
		limit(10)->all();
		
		foreach ($querybirth as $qu)
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
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<?php echo '<a href="filmv?id='.$qu->id_film.'">'  ?>
								<figure>
									<?php echo '<img class="img-fluid" src="assets/images/'.$qu->film_img.'" alt="">'  ?>
								</figure>
								<div class="box-content">
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $qu->lenght ?> мин.

										</span>
									</h4>
									<?php echo $buttonidlike; echo $buttonidlikedis; ?>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" <?php echo 'href="filmv?id='.$qu['id_film'].'">' ?><?php echo $qu->film_name; ?></a></h3>
						<div class="button-center text-center mt-4">
							<?php echo '<a href="filmv?id='.$qu->id_film.'" class="btn watch-button">Подробнее...</a>'  ?>
						</div>

					</div>
					<?php
		}
		 ?>
				</div>
			</div>

		</div>
	</section>