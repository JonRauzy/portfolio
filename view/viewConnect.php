<?php

$titre = 'connexion';
require_once '../view/include/header.php';

?>
<div class="connecter">
    <div class="form">
        <h1>Connectez-vous</h1>
        <?php
        if (isset($erreur)) {
            echo "<h3>$erreur</h3>";
        }
        ?>
        <form action="" method="post" id="connect-form">
            <input type="text" placeholder="nom d'utilisateur" name="login">
            <input type="password" placeholder="mot de passe" name="password">
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
</div>

<?php
include_once '../view/include/footer.php';