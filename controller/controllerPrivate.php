<?php 

$login = htmlspecialchars(strip_tags(trim($_POST['login'])));
$password = htmlspecialchars(strip_tags(trim($_POST['pword'])));
$allUsers = connect($db);


foreach($allUsers as $user){

    if($user['login']==$login && $user['password']==$password){
    
        require_once '../view/viewPrivate.php';
        break;
    }else{
        $erreur = 'on te connait pas';
        require_once '../view/viewConnect.php';
    }
}