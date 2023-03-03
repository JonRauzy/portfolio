<?php


function insertMail($theDB) {
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])),ENT_QUOTES);
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])),ENT_QUOTES);
    $sqlMail = "INSERT INTO `contacts`(`name`, `email`, `message`) VALUES ('$name','$email','$message');";
    return mysqli_query($theDB, $sqlMail);
}
