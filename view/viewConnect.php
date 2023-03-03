<?php

$titre = 'connexion';
require_once '../view/include/header.php';

?>
    <div class="container">
        <div class="form-container">
            <?php
            if(!empty($erreur)){
                echo "<h4>$erreur</h4>";
            }
            ?>
            <h1>Connectez-vous</h1>
            <form action="" method="post" id="sub-form">
                <input type="text" placeholder="nom d'utilisateur" name="login">
                <input type="password" placeholder="mot de passe" name="pword">
                <input type="submit" id="btn-submit" value="Se connecter">
            </form>
            <a href="?p=mdpForget">Mot de passe oublié ?</a>
            <div id="ou">
                <hr>
                <p>ou</p>
                <hr>
            </div>
            <a href="?p=subNew" id="btn-new"><button>Créer nouveau compte</button></a>
        </div>