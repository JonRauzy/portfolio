<?php

$titre = 'tutoriels';
require_once '../view/include/header.php';
?>

<h1>tutoriels</h1>
<div class="container-tuto">
    <div class="tuto-select">
        <div class="tuto-card-1">
            <h4>Tutoriel 1 : Intro à la programmation par Harvard </h4>
            <a href="#tuto-1"><img src="img/tuto1.PNG" alt=""></a>
        </div>
        <div class="tuto-card-2">
            <h4>Tutoriel 2 : Comment faire une fonction en JavaScript</h4>
            <a href="#tuto-2"><img src="img/tuto2.PNG" alt=""></a>
        </div>
    </div>
    <div class="video" id="tuto-1">
        <h2>Introdution à la programmation : </h2>
        <p style="padding-top: 1rem;">
            Voici l'introduction à la programmation de Harvard, dispensée par un prof passionnant pour un sujet tout aussi passionnant! Cette vidéo m'a ouvert le 3e œil sur la science des ordinateurs, l'algorithmique et la logique à mettre en œuvre pour résoudre les problèmes liés aux langages informatiques. 10/10 recommandé!
        </p>
        <iframe width="900" height="800" src="https://www.youtube.com/embed/8mAITcNt710" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    <hr>
    <div class="tuto-text" id="tuto-2">
        <h2>Comment faire une fonction JavaScript :</h2>
        <p>Selon le MDN, "Les fonctions font partie des briques fondamentales de JavaScript. Une fonction est une
            procédure JavaScript, un ensemble d'instructions effectuant une tâche ou calculant une valeur." En gros
            c'est un bloque d'instrction qu'on pourra rappeler à volonté tout au long du notre script. Ca permet au code
            d'être modulaire, plus concis et aussi plus clair.
        </p>
        <h4>Mais comment on s'y prend?? </h4>
        <p>
            Le mot clé ici c'est "function"! Suivi du nom qu'on veut lui assigner et d'une paire aranthése.
            Puis on met les instructions entre accolade : {} <br>
            Là on a moulte choix, on peut y mettre des boucles, des conditions, d'autres fonctions... Et à la fin on
            peut mettre un "return" pour récupérer une valeur spécifique. Ce "return" marque la fin du bloc
            d'instructions, c'est à dire, o ne saura pas rajouter plus d'instructions après ça!
            On peut aussi mettre des "paramètres" entre les paranthèse, elles marchent un peu comme des variables, la
            fonctions va les utiliser et il faudra leur donner une valeur au moment d'appeler la fonction.
            Bravo! On vient de déclarer notre première fonction! Autrement dit, on l'a créée, on lui a donné un but et
            on va pouvoir l'utiliser.
        </p>
        <h5>fonction basique</h5>
        <img src="img/function3.PNG" alt="">
        <h5>La même avec les paramètres</h5>
        <img src="img/function2.PNG" alt="">
        <h4>Et alors? </h4>
        <p>
            Maintenant on peut appeler la fonction dans notre code. Il suffit pour ça d'écrire son nom suivis des
            paranthèse! Si on a défini des paramètres au moment de la déclaration il faudra passer des valeurs entre ces
            paranthèse qu'on appelle des "arguments"
        </p>
        <img src="img/function4.PNG" alt="">
        <h4>Un exemple ?</h4>
        <p>On va créer une fonction basique qui va additionner 2 nombres pour voire un application concrète : </p>
        <img src="img/exemplefunction1.PNG" alt="">
        <p>Sur la photo ci-dessus on voit le mot-clé <em>function</em>, suivi du nom de la fonction(<em>addition</em>), des paranthèses avec leur paramètre ( <em> nombre1</em> et <em>nombre2</em>), des accolades. Et dans ces accolades on demande à la fonction de retourner (<em>return</em>) la valeur de nombre1 additionné au nombre2 </p> 
        <img src="img/exemplefunction2.PNG" alt="">
        <p>Et ici on voit qu'on vient d'appeler la fonction, on lui a passé les 2 valeurs en arguments et j'ai mis le résultat en commentaire. Voilààààààààààà! </p>
        <h4>Pour aller plus loin :</h4>
        <p>
            Il existe aussi toutes sortes de fonctions, comme les fonctions fléchées par exemple. Je vous invite à aller
            vous entrainer sur <a href="https://www.codewars.com" target="_blank">CodeWar</a> pour bien maitriser ce
            principe avant d'aller plus loin! Et n'oubliez pas <em>amusez-vous!</em>
        </p>
    </div>
</div>

<?php
include_once '../view/include/footer.php';