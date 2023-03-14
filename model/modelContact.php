<?php

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


// use Symfony\Component\Mailer\Transport;
// use Symfony\Component\Mailer\Mailer;
// use Symfony\Component\Mime\Email;

// function sendMail()
// {
//     $name = htmlspecialchars(strip_tags(trim($_POST['name'])), ENT_QUOTES);
//     $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
//     $message = htmlspecialchars(strip_tags(trim($_POST['message'])), ENT_QUOTES);
//     $object = $_POST['object'];


//     $transport = Transport::fromDsn(MAIL_DSN);
//     $mailer = new Mailer($transport);

//     $email = (new Email())
//         ->from(@$email)
//         ->to(MAIL_ADMIN)
//         //->cc('cc@example.com')
//         //->bcc('bcc@example.com')
//         //->replyTo('fabien@example.com')
//         //->priority(Email::PRIORITY_HIGH)
//         ->subject($name . "a dit " . $object)
//         ->text($message)
//         ->html("<p>$message</p>");

//     $mailer->send($email);
// }