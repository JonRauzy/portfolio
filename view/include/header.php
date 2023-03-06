<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8e5ed3edd.js" crossorigin="anonymous"></script>
</head>

<body>

    <body>
        <div class="nav" style="display: flex; justify-content: space-between; padding:20px;">
            <div class="black-bg">
                <a href="?p=homepage" style="<?php if ($titre === "accueil"): ?>color:red<?php endif ?>">accueil</a>
                <a href="?p=projects" style="<?php if ($titre === "projets"): ?>color:red<?php endif ?>">projets</a>
                <a href="?p=tutorials" style="<?php if ($titre === "tutoriels"): ?>color:red<?php endif ?>">tutoriels</a>
                <a href="?p=cv" style="<?php if ($titre === "CV"): ?>color:red<?php endif ?>">cv</a>
                <a href="?p=links" style="<?php if ($titre === "liens"): ?>color:red<?php endif ?>">liens</a>
                <a href="?p=contact" style="<?php if ($titre === "contact"): ?>color:red<?php endif ?>">contact</a>
            </div>
            <div class="yellow-gb">
                <a href="?p=connect" style="<?php if ($titre === "connexion"): ?>color:red<?php endif ?>">connexion</a>
            </div>
        </div>
        <button onclick="darkMode()">Toggle dark mode</button>