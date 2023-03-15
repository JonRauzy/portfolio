<?php

$titre = 'tutoriels';
require_once '../view/include/header.php';
?>

<h1>tutoriels</h1>
<div class="container-tuto">
    <div class="tuto-select">
        <div class="tuto-card-1">
            <h4>Tutoriel 1 : Intro à la programmation par Harvard </h4>
            <a href="#tuto-1"><img src="img/tuto1" alt=""></a>
        </div>
        <div class="tuto-card-2">
            <h4>Tutoriel 2 : Comment faire une fonction en JavaScript</h4>
            <a href="#tuto-2"><img src="img/tuto2" alt=""></a>
        </div>
    </div>
    <div class="video" id="tuto-1">
        <h2>Introdution à la programmation : </h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur esse, odit nobis recusandae accusamus
            nemo est. Maiores expedita porro officiis praesentium. Aspernatur ipsa mollitia voluptate officia. Minima
            consectetur iste suscipit?</p>
        <iframe width="900" height="800" src="https://www.youtube.com/embed/8mAITcNt710" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    <div class="tuto-text" id="tuto-2">

        <h2>Comment faire une fonction :</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit magni similique obcaecati porro tempore non
            sed minima, velit vero saepe ex laboriosam laudantium ipsa aperiam, asperiores corporis maxime quasi ipsam?
        </p>
        <h4>On passe aux choses sérieuse :</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, praesentium cupiditate. Aperiam est
            porro iure accusamus cumque amet numquam placeat earum voluptatibus delectus, error aspernatur explicabo
            facere rerum. Sapiente, culpa.</p>
        <h4>Et finalement :</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam tempora modi nulla, maiores magni voluptate
            rerum quis obcaecati labore odio eos, fuga error ex suscipit iste perferendis adipisci. Dolor, quia!</p>
    </div>
</div>

<?php
include_once '../view/include/footer.php';