<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/connect.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/cv.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/links.css">
    <link rel="stylesheet" href="css/private.css">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/tutorial.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8e5ed3edd.js" crossorigin="anonymous"></script>
</head>

<body>

    <body>
        <div class="pace"></div>
        <label class="switch">
            <input type="checkbox" onclick="darkMode()">
            <span class="slider"></span>
        </label>
        <div class="nav">
            <!-- toggle button dark mode   -->
            <div class="rock" style="width:127px"></div>


            <div class="black-bg">
                <a href="?p=homepage"
                    style="<?php if ($titre === "accueil"): ?>color:rgb(185, 39, 39)<?php endif ?>">accueil</a>
                <a href="?p=projects"
                    style="<?php if ($titre === "projets"): ?>color:rgb(185, 39, 39)<?php endif ?>">projets</a>
                <a href="?p=tutorials"
                    style="<?php if ($titre === "tutoriels"): ?>color:rgb(185, 39, 39)<?php endif ?>">tutoriels</a>
                <a href="?p=cv" style="<?php if ($titre === "CV"): ?>color:rgb(185, 39, 39)<?php endif ?>">cv</a>
                <a href="?p=links"
                    style="<?php if ($titre === "liens"): ?>color:rgb(185, 39, 39)<?php endif ?>">liens</a>
                <a href="?p=contact"
                    style="<?php if ($titre === "contact"): ?>color:rgb(185, 39, 39)<?php endif ?>">contact</a>
            </div>

            <!-- connect button -->
            <div class="yellow-bg">
                <a href="?p=connect"
                    style="<?php if ($titre === "connexion"): ?>color:rgb(185, 39, 39)<?php endif ?>">connexion</a>
            </div>

            <!-- mobile navbar  -->
            <div class="mobile-nav">
                <a href="?p=homepage"
                    style="<?php if ($titre === "accueil"): ?>color:rgb(185, 39, 39)<?php endif ?>">accueil</a>
                <a href="?p=projects"
                    style="<?php if ($titre === "projets"): ?>color:rgb(185, 39, 39)<?php endif ?>">projets</a>
                <a href="?p=tutorials"
                    style="<?php if ($titre === "tutoriels"): ?>color:rgb(185, 39, 39)<?php endif ?>">tutoriels</a>
                <a href="?p=cv" style="<?php if ($titre === "CV"): ?>color:rgb(185, 39, 39)<?php endif ?>">cv</a>
                <a href="?p=links"
                    style="<?php if ($titre === "liens"): ?>color:rgb(185, 39, 39)<?php endif ?>">liens</a>
                <a href="?p=contact"
                    style="<?php if ($titre === "contact"): ?>color:rgb(185, 39, 39)<?php endif ?>">contact</a>
                <a href="?p=connect"
                    style="<?php if ($titre === "connexion"): ?>color:rgb(185, 39, 39)<?php endif ?>">connexion</a>
            </div>


        </div>
        <!-- burger button  -->
        <button class="brgr-menu"
            onclick="openMenu(); this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
            aria-label="Main Menu">
            <svg width="100" height="100" viewBox="0 0 100 100">
                <path class="line line1"
                    d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                <path class="line line2" d="M 20,50 H 80" />
                <path class="line line3"
                    d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
            </svg>
        </button>