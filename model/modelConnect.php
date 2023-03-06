<?php

function connect(mysqli $theDB, string $userLogin, string $userPassword) {
    $userLogin = mysqli_real_escape_string($theDB, $userLogin);

    $sqlConnect = "SELECT * FROM users WHERE login='$userLogin';";
    try {

        $queryConnect = mysqli_query($theDB, $sqlConnect);
    } catch (Exception $e) {
        return $e->getMessage();
    }

    if (mysqli_num_rows($queryConnect) === 0) {
        return $erreur = "on te connait pas";
    }

    $recup = mysqli_fetch_assoc($queryConnect);
    if ($userPassword === $recup['password']) {
        $_SESSION = $recup;
        unset($_SESSION['password'], $_SESSION['uniqueID']);
        $_SESSION['myID'] = session_id();
        return true;
    } else {
        return $erreur =  "on te connait pas";
    }
}
