<?php
$link = mysqli_connect("localhost", "root", "root", "movies");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

$idfilm = $_POST['idfilm'];
$iduser = $_POST['iduser'];

$sql = "DELETE FROM `userrate` WHERE `id_film_rate` = $idfilm AND `id_user_rate` = $iduser";
$result = mysqli_query($link, $sql);
var_dump($result);