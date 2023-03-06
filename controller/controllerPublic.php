<?php

if (isset($_GET['p']) && $_GET['p'] === "projects") {
    $resultProjects = getProjects($db);
    require_once '../view/viewProjects.php';    
} 

elseif (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = (int) $_GET['id'];
    $projectSolo = getProjectByID($db, $id);
    require_once '../view/viewProjectID.php';
} 

elseif (isset($_GET['p']) && $_GET['p'] === "tutorials") {
    require_once '../view/viewTutorials.php';
} 

elseif (isset($_GET['p']) && $_GET['p'] === "cv") {
    require_once '../view/viewCV.php';
} 

elseif (isset($_GET['p']) && $_GET['p'] === "contact") {
    require_once '../view/viewContact.php';

}

elseif (isset($_POST['name'], $_POST['email'], $_POST['object'], $_POST['message'])) {
    $envoyage = insertMail($db);
    // $wesh = sendMail();
    // require_once '../view/include/message.php';
    require_once '../view/viewContact.php';
} 

elseif (isset($_GET['p']) && $_GET['p'] === "links") {
    $resultLinks = getLinks($db);
    require_once '../view/viewLinks.php';
}

elseif (isset($_GET['p']) && $_GET['p'] === "connect") {
    require_once '../view/viewConnect.php';
}
 
else {
    require_once '../view/viewHomePage.php';
}