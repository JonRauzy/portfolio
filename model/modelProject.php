<?php 


function getProjects($theDB){
    $sqlProjects = "SELECT * FROM projects ORDER BY id;";
    $queryProjects = mysqli_query($theDB, $sqlProjects);
    return mysqli_fetch_all($queryProjects, MYSQLI_ASSOC);
}


function getProjectByID(mysqli $theDB, int $theID){
    $sqlProjects = "SELECT * FROM projects WHERE id= $theID;";
    $queryProjects = mysqli_query($theDB, $sqlProjects);
    return mysqli_fetch_all($queryProjects, MYSQLI_ASSOC);
}