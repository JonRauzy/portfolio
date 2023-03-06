<?php

function insertMail($theDB) {
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])),ENT_QUOTES);
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])),ENT_QUOTES);
    $object = $_POST['object'];
    $sqlMail = "INSERT INTO `contacts`(`name`, `email`, `message`, `object`) VALUES ('$name','$email','$message','$object');";
    return mysqli_query($theDB, $sqlMail);
}


// function sendMail()
// {
//     $name = strip_tags(trim($_POST['name']));    
//     $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
//     $object = strip_tags(trim($_POST['object']));
//     $message = strip_tags(trim($_POST['message']));

//     if (!empty($name) && !empty($email) && !empty($object) && !empty($message)) {
  
//         $myEmail = "jonathan.rauzy@gmail.com";
   
//         $messageFinal = "Message envoyé par : \r\n\r\n";
//         $messageFinal .= $email . "\r\n\r\n";
//         $messageFinal .= "Titre: \r\n\r\n";
//         $messageFinal .= $object . "\r\n\r\n";
//         $messageFinal .= $message;

   
//         $entetes = 'From: ' . $myEmail . "\r\n" .
//             'Reply-To: ' . $email . "\r\n" .
//             'X-Mailer: PHP/' . phpversion();


//         $envoi = mail($myEmail, $object, $message, $entetes);
  
//         if ($envoi) {
         
//             return $erreur = "<h2>Message bien envoyé</h2><br>" . "<h3>Vous recevrez une réponse prochainement</h3>";
//         } else {
      
//             return $erreur = "Problème du serveur, veuillez recommencer plus tard";
//         }

     
//     } else {
  
//         return $erreur = "<h3>Veuillez remplir correctement les champs</h3><br>"
//             . "<h4>Retour au formulaire <a href='#' onclick='history.go(-1);'>ici</a></h4>";
//     }
// }