<?php use yii\helpers\Url; ?>
<style>
 .admin-default-index{
	 margin-top: 7%;
  margin-left: 5%;
   margin-right: 5%;
   padding-bottom: 7%;
   padding-left: 7%;
    padding-right: 7%;
}
.btn-primary{
	width: 32%;
	height: 65px;
	font-size: 130%;
	text-align: center;
	padding-top: 2%;
	padding-bottom: 2%;
}
h1{
	color: #e65757;
	font-size: 400%;
}
</style>
<div class="admin-default-index">
    <h1>Добро пожаловать в раздел администрации!</h1><br><br>

       <h2>Выберите таблицу.</h2><br><br>
	<a href=<?=Url::toRoute(['/admin/actor']);?> class="btn btn-primary" role="button" aria-pressed="true">АКТЕР</a>
	<a href=<?=Url::toRoute(['/admin/comment']);?> class="btn btn-primary" role="button" aria-pressed="true">КОММЕНТАРИЙ</a>
	<a href=<?=Url::toRoute(['/admin/director']);?> class="btn btn-primary" role="button" aria-pressed="true">РЕЖИССЕР</a><br><br>
	<a href=<?=Url::toRoute(['/admin/film']);?> class="btn btn-primary" role="button" aria-pressed="true">ФИЛЬМ</a>
	<a href=<?=Url::toRoute(['/admin/genre']);?> class="btn btn-primary" role="button" aria-pressed="true">ЖАНР</a>
	<a href=<?=Url::toRoute(['/admin/hero']);?> class="btn btn-primary" role="button" aria-pressed="true">ПЕРСОНАЖ</a><br><br>
	<a href=<?=Url::toRoute(['/admin/library']);?> class="btn btn-primary" role="button" aria-pressed="true">БИБЛИОТЕКА</a>
	<a href=<?=Url::toRoute(['/admin/oscaractors']);?> class="btn btn-primary" role="button" aria-pressed="true">ОСКАРЫ АКТЕРОВ</a>
	<a href=<?=Url::toRoute(['/admin/oscardirectors']);?> class="btn btn-primary" role="button" aria-pressed="true">ОСКАРЫ РЕЖИССЕРОВ</a><br><br>
	<a href=<?=Url::toRoute(['/admin/oscarfilms']);?> class="btn btn-primary" role="button" aria-pressed="true">ОСКАРЫ ФИЛЬМОВ</a>
	<a href=<?=Url::toRoute(['/admin/studio']);?> class="btn btn-primary" role="button" aria-pressed="true">СТУДИЯ</a>
	<a href=<?=Url::toRoute(['/admin/user']);?> class="btn btn-primary" role="button" aria-pressed="true">ПОЛЬЗОВАТЕЛЬ</a>
</div>
