<?php 


function getProjects($theDB){
    $sqlProjects = "SELECT id, title, link, img, LEFT(description, 25) AS descriptionshort  FROM projects ORDER BY id;";
    $queryProjects = mysqli_query($theDB, $sqlProjects);
    return mysqli_fetch_all($queryProjects, MYSQLI_ASSOC);
}


function getProjectByID(mysqli $theDB, int $theID){
    $sqlProjects = "SELECT * FROM projects WHERE id= $theID;";
    $queryProjects = mysqli_query($theDB, $sqlProjects);
    return mysqli_fetch_all($queryProjects, MYSQLI_ASSOC);
}


// truncate result showing in the view :
function truncate($text)
{
    $cut = strrpos($text, ' ');
    return substr($text, 0, $cut);
}