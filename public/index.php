<?php

require_once '../config.php';
require_once '../model/modelProject.php';
require_once '../model/modelLinks.php';
require_once '../model/modelContact.php';
require_once '../model/modelConnect.php';

try{
    $db = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    mysqli_set_charset($db,DB_CHARSET);
}catch(Exception $e){
    die($e->getMessage());
} 


if(isset($_POST['login'], $_POST['password'])){

    require_once '../controller/controllerPrivate.php';

}else{

    // appel le controleur
    require_once '../controller/controllerPublic.php';
}
