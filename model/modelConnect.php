<?php

function connect($theDB){

    $sqlConnect = 'SELECT login, password FROM users';
    $queryConnect = mysqli_query($theDB, $sqlConnect);
    return mysqli_fetch_all($queryConnect, MYSQLI_ASSOC);
    
}