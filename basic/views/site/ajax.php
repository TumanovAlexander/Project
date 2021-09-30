<?php
$link = mysqli_connect("localhost", "root", "root", "movies");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

$qrate = $_POST['qrate'];
$idfilm = $_POST['idfilm'];
$iduser = $_POST['iduser'];


$sql = "INSERT INTO `userrate` (`rate`, `id_user_rate`, `id_film_rate`) VALUES ('$qrate', '$iduser', '$idfilm')";
$result = mysqli_query($link, $sql);
var_dump($result);