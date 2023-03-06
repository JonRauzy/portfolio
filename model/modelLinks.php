<?php 

function getLinks($theDB){
    $sqlLinks = "SELECT * FROM links;";
    $queryLinks = mysqli_query($theDB, $sqlLinks);
    return mysqli_fetch_all($queryLinks, MYSQLI_ASSOC);
}
