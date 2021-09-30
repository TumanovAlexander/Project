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
.ad {
	color: #e65757;
	font-size: 350%;
}
</style>
<div class="admin-default-index">
    <h2 class="ad">Добро пожаловать в раздел администрирования!</h2><br><br>

       <h2>Выберите таблицу.</h2><br><br>
	<a href="director" class="btn btn-primary" role="button" aria-pressed="true">РЕЖИССЕР</a>
	<a href="film" class="btn btn-primary" role="button" aria-pressed="true">ФИЛЬМ</a>
	<a href="genre" class="btn btn-primary" role="button" aria-pressed="true">ЖАНР</a><br><br>
	<a href="studio" class="btn btn-primary" role="button" aria-pressed="true">СТУДИЯ</a>
	<a href="user" class="btn btn-primary" role="button" aria-pressed="true">ПОЛЬЗОВАТЕЛЬ</a>
</div>
