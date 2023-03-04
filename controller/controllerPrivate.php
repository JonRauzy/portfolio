<?php

$login = htmlspecialchars(strip_tags(trim($_POST['login'])),ENT_QUOTES);
$password = htmlspecialchars(strip_tags(trim($_POST['password'])),ENT_QUOTES);
$isConnect = connect($db, $login, $password);


if (is_string($isConnect)) {
    $erreur = $isConnect;
    include '../view/viewConnect.php';
}

if ($isConnect === true) {
    include '../view/viewPrivate.php';
}
