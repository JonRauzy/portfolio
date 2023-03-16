<?php

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;


function sendMail()
{
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])), ENT_QUOTES);
    $mail = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])), ENT_QUOTES);
    $object = $_POST['object'];
    
    $transport = Transport::fromDsn(MAIL_DSN);
    $mailer = new Mailer($transport);

   // pour l'admin :
   $email = (new Email())

   ->from(MAIL_FROM)
   ->to(MAIL_ADMIN)
   ->subject($object . " de " . $name)
   ->text($message)
   ->html($message);

   $mailer->send($email);

   //pour le user :
   $email = (new Email())

   ->from(MAIL_FROM)
   ->to($mail)
   ->subject("t'as envoyé")
   ->text("t'as envoyé je t'ai dit")
   ->html("pareil");

   $mailer->send($email);
}



function insertMail($theDB)
{
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])), ENT_QUOTES);
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])), ENT_QUOTES);
    $object = $_POST['object'];
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $sqlMail = "INSERT INTO `contacts`(`name`, `email`, `message`, `object`) VALUES ('$name','$email','$message','$object');";
        } catch (Exception $e) {
            exit($e->getMessage());
        }
        return mysqli_query($theDB, $sqlMail);
    } else {
        return "y'a des problème!";
    }
}