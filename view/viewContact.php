<?php

$titre = 'contact';
require_once '../view/include/header.php';

?>

<h1>contact</h1>

<form action="./" method="post" id="contactForm">
    <input type="text" name="name" id="name" placeholder="name">
    <input type="email" name="email" id="email" placeholder="email">
    <select type="select" name="object" id="object">
        <option value="quoi">Quoi</option>
        <option value="comment">Comment</option>
        <option value="tg">TG</option>
    </select>
    <textarea name="message" id="message" cols="30" rows="10" placeholder="votre texte"></textarea>
    <button type="submit">clic</button>
</form>


<?php
include_once '../view/include/footer.php';