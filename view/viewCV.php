<?php
$titre = 'CV';
require_once '../view/include/header.php';
?>

<h1>CV</h1>


<div class="container-cv">
    <div class="photo-cv">
        <img src="img/cv.png" alt="">
    </div>
    <div class="header-cv">
        <p>Jonathan Rauzy</p>
        <p>Rue de chez moi</p>
        <p>1666 bruxelles</p>
        <p>0466/666-666</p>       
        <a href="" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        

        
    </div>
    <div class="content-cv">
        <h4>travail</h4>
        <div class="cv-lign">
            <h5 class="titre-cv">Second de cuisine</h5>
            <p class="taff-cv">Brew dog café</p>
            <p class="dates-cv">2018-2019</p>
        </div>
        <div class="cv-lign">
            <h5 class="titre-cv">Barman</h5>
            <p class="taff-cv">L'athénée</p>
            <p class="dates-cv">2018-2019</p>
        </div>
        <div class="cv-lign">
            <h5 class="titre-cv">Barman</h5>
            <p class="taff-cv">l'amère à boire</p>
            <p class="dates-cv">2016-2018</p>
        </div>
        <div class="cv-lign">
            <h5 class="titre-cv">Manager / barman</h5>
            <p class="taff-cv">Delirium Café</p>
            <p class="dates-cv">2013-2016</p>
        </div>
        <div class="cv-lign">
            <h5 class="titre-cv">Casseur de genoux</h5>
            <p class="taff-cv">Toulouse</p>
            <p class="dates-cv">2003-2013</p>
        </div>
        <h4>formation</h4>
        <div class="cv-lign">
            <h5 class="titre-cv">WebDev full stack</h5>
            <p class="taff-cv">CF2M</p>
            <p class="dates-cv">2022-2023</p>
        </div>
    </div>
</div>

<?php
include_once '../view/include/footer.php';