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

elseif (isset($_GET['p']) && $_GET['p'] === "links") {
    require_once '../view/viewLinks.php';
}

elseif (isset($_GET['p']) && $_GET['p'] === "connect") {
    require_once '../view/viewConnect.php';
}

else{
    require_once '../view/viewHomePage.php';
}

// <a href="?p=homepage">accueil</a>
// <a href="?p=projects">projets</a>
// <a href="?p=tutorials">tutoriels</a>
// <a href="?p=cv">cv</a>
// <a href="?p=contact">contact</a>
// <a href="?p=links">liens</a>
// </div>
// <div class="yellow-gb">
// <a href="?=connect">connexion</a>
// </div>
// </div>