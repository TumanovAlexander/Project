<?php

/* @var $this yii\web\View */
use app\modules\admin\models\Film;
use app\modules\admin\models\Genre;
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
	<!-- //banner-slider-->
	<!-- main-slider -->
	<!--grids-sec1-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Популярные фильмы</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Показать все</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<?php
		$query1 = Film::find()->select('id_film, film_name, lenght, film_img')->orderBy('box_office DESC')
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->limit(4)->all();
		foreach ($query1 as $qu)
		{
		 ?>
					<div class="item vhny-grid">
						<div class="box16">
							<?php echo '<a href="filmv?id='.$qu->id_film.'">'  ?>
								<figure>
									<?php echo '<img class="img-fluid" src="assets/images/'.$qu->film_img.'" alt="">'  ?>
								</figure>
								<div class="box-content">
									<h3 class="title"><?php echo $qu->film_name ?></h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $qu->lenght ?> мин.

										</span>
									</h4>
													
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<?php
		}
		 ?>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!--//grids-sec1-->
	<!--grids-sec2-->

	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Новинки</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="category">Показать все</a></h4>
						</div>
					</div>
				</div>
				<div class="owl-three owl-carousel owl-theme">
				<?php
		$query2 = Film::find()->select('id_film, film_name, lenght, film_img')->orderBy('date DESC')
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->limit(6)->all();
		foreach ($query2 as $qu)
		{
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
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<h3> <a class="title-gd" <?php echo 'href="filmv?id='.$qu['id_film'].'">' ?><?php echo $qu->film_name ?></a></h3>
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
	<!--grids-sec2-->
	<!--mid-slider -->
	<?php
	$arrayname = [];
	$arraydate = [];
	$arraygenre = [];
	$arraylenght = [];
	$i=0;
		$query3 = Film::find()->select('id_film, film_name, lenght, film_img, genre.genre_name, year(date) as year')->asArray()
		->rightJoin('genre', 'genre.id_genre=film.id_genre_film')->groupBy('id_film')
		->where(['=', 'id_film', 12])->orWhere(['=', 'id_film', 16])->orWhere(['=', 'id_film', 17])->all();
		foreach ($query3 as $qu)
		{
			$arrayname[$i] = $qu['film_name'];
			$arraydate[$i] = $qu['year'];
			$arraylenght[$i] = $qu['lenght'];
			$arraygenre[$i] = $qu['genre_name'];
			$i++;
		}
		 ?>
	<section class="w3l-mid-slider position-relative">
		<div class="companies20-content">
			<div class="owl-mid owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info mid-view bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text"><?php echo $arraygenre[0] ?></span>
									<h3><?php echo $arrayname[0] ?></h3>
									<p><?php echo $arraydate[0] ?> ‧ <?php echo $arraygenre[0] ?> ‧ <?php echo $arraylenght[0] ?> мин.</p>
									<a href="#small-dialog2" class="watch popup-with-zoom-anim play-view1">
									<span class="fa fa-play"
											aria-hidden="true"></span>
										Смотреть трейлер</a>
										<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
									<iframe src="https://player.vimeo.com/video/389125654" allow="autoplay; fullscreen"
										allowfullscreen=""></iframe>
								</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top1 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text"><?php echo $arraygenre[2] ?></span>
									<h3><?php echo $arrayname[2] ?></h3>
									<p><?php echo $arraydate[2] ?> ‧ <?php echo $arraygenre[2] ?> ‧ <?php echo $arraylenght[2] ?> мин.</p>
									<a href="#small-dialog3" class="watch popup-with-zoom-anim play-view1">
									<span class="fa fa-play"
											aria-hidden="true"></span>
										Смотреть трейлер</a>
										<div id="small-dialog3" class="zoom-anim-dialog mfp-hide">
									<iframe src="https://player.vimeo.com/video/366448591" allow="autoplay; fullscreen"
										allowfullscreen=""></iframe>
								</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info mid-view mid-top2 bg bg2">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text"><?php echo $arraygenre[1] ?></span>
									<h3><?php echo $arrayname[1] ?></h3>
									<p><?php echo $arraydate[1] ?> ‧ <?php echo $arraygenre[1] ?> ‧ <?php echo $arraylenght[1] ?> мин.</p>
									<a href="#small-dialog4" class="watch popup-with-zoom-anim play-view1">
									<span class="fa fa-play"
											aria-hidden="true"></span>
										Смотреть трейлер</a>
										<div id="small-dialog4" class="zoom-anim-dialog mfp-hide">
									<iframe src="https://player.vimeo.com/video/358488448" allow="autoplay; fullscreen"
										allowfullscreen=""></iframe>
								</div>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- //mid-slider-->
	<!--/tabs-->
	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li>Новинки</li>
							<li>Кассовое</li>
							<li>Лучшее</li>
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div class="albums-content">
								<div class="row">
								<?php
		$query4 = Film::find()->select('id_film, film_name, lenght, rating_imdb, film_img, year(date) as year')->orderBy('date DESC')->asArray()
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->limit(9)->all();
		foreach ($query4 as $qu)
		{
		$ajaxbutton = 'ajax';
		$noajax = 'ajaxdis';
		$idbuttonajax = $qu['id_film'].$ajaxbutton;
		$idbuttonajaxdis = $qu['id_film'].$noajax;
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
												<a class="author-book-title" <?php echo 'href="filmv?id='.$qu['id_film'].'">' ?><?php echo $qu['film_name']; echo '</a>'; ?>
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
							<div class="albums-content">
								<div class="row">
								<?php
		$query5 = Film::find()->select('id_film, film_name, lenght, rating_imdb, film_img, box_office, year(date) as year')->orderBy('box_office DESC')->asArray()
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->limit(9)->all();
		foreach ($query5 as $qu)
		{
			$ajaxbutton = 'ajax';
		$noajax = 'ajaxdis';
		$idbuttonajax = $qu['id_film'].$ajaxbutton;
		$idbuttonajaxdis = $qu['id_film'].$noajax;
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
												<p><?php echo $qu['box_office'] ?> 000 000 $</p>
												<a class="author-book-title" <?php echo 'href="filmv?id='.$qu['id_film'].'">' ?> <?php echo $qu['film_name'];  echo '</a>'; ?>
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
							<div class="albums-content">
								<div class="row">
								<?php
		$query6 = Film::find()->select('id_film, film_name, lenght, rating_imdb, film_img, box_office, year(date) as year')->orderBy('rating_imdb DESC')->asArray()
		->where(['<>', 'id_film', 16])->andWhere(['<>', 'id_film', 17])->limit(9)->all();
		foreach ($query6 as $qu)
		{
			$ajaxbutton = 'ajax';
		$noajax = 'ajaxdis';
		$idbuttonajax = $qu['id_film'].$ajaxbutton;
		$idbuttonajaxdis = $qu['id_film'].$noajax;
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
												<p> Оценка IMDB - <?php echo $qu['rating_imdb'] ?></p>
												<a class="author-book-title"<?php echo 'href="filmv?id='.$qu['id_film'].'">' ?><?php echo $qu['film_name'];  echo '</a>'; ?>
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
					</div>
				</div>
			</div>
		</div>
	</section>