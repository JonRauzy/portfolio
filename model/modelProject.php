<?php 

function getProjects($theDB){
    $sqlProjects = "SELECT * FROM projects;";
    $queryProjects = mysqli_query($theDB, $sqlProjects);

    return mysqli_fetch_all($queryProjects, MYSQLI_ASSOC);
}