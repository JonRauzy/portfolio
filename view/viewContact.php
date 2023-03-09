<?php

$titre = 'contact';
require_once '../view/include/header.php';
$retour = "";
?>

<div class="contact">
<div class="form">
    <h1>Contact</h1>
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
</div>
</div>

<?php
if (!empty($envoyage)) {
    if (is_string($envoyage)) {
        echo $envoyage;
    } else {

        echo "message envoyé!";
    }
}
?>

<h2><?= $retour ?></h2>

<?php
include_once '../view/include/footer.php';