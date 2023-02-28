<?php

require_once '../config.php';
require_once '../model/modelProject.php';

try{
    $db = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
}catch(Exception $e){
    die($e->getMessage());
}


if(false){
    require_once '../controller/controllerPrivate.php';

}else{

    // appel le controleur
    require_once '../controller/controllerPublic.php';
}

