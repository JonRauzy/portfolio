<?php

$titre = 'contact';
require_once '../view/include/header.php';
$retour = "";
?>

<div class="connect-container">
    <div class="connect-header">
        <h1>Contactez-nous:</h1>
        <p>Pour nous envoyer un message</p>
    </div>


    <div class="contact">
        <div class="form">
            <h1 id="connect-header-responsive">Contact</h1>
            <form action="./" method="post" id="contact-form">
                <input type="text" name="name" id="name" placeholder="name">
                <input type="email" name="email" id="email" placeholder="email">
                <select type="select" name="object" id="object">
                    <option value="quoi">Quoi</option>
                    <option value="comment">Comment</option>
                    <option value="tg">TG</option>
                </select>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="votre texte"></textarea>
                <input type="submit" id="btn-contact" value="Envoyer">
            </form>
            <?php
            if (!empty($envoyage)) {
                if (is_string($envoyage)) {
                    echo "<h3>$envoyage</h3>";
                } else {

                    echo "<h3>message envoyé!</h3>";
                }
            }
            ?>
        </div>
    </div>
</div>


<h2><?= $retour ?></h2>

<?php
include_once '../view/include/footer.php';