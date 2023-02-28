<?php

// on appelle la vue :
$titre = 'accueil';

if(isset($_GET['p'])&&$_GET['p']==="projects"){
    $resultProjects = getProjects($db);
    require_once '../view/viewProjects.php';
}else{

    require_once '../view/ViewHomePage.php';
}


