<?php

foreach ($projectSolo as $value) :
    $titre = $value['title'];
    include_once 'include/header.php';
?>

    <div class="container-project-id">
        <h1><?= $value['title'] ?></h1>
        <div class="project-id">
            <p><?= $value['description'] ?></p>
            <a href="<?= $value['link'] ?>">Cliquez ici pour visiter le site</a>
            <img src="<?= $value['img'] ?>" alt="">
        <?php
    endforeach;
        ?>
        <a href="?p=projects" style="font-size: 1.2rem">&#x2190; retour</a>
        </div>
    </div>


    <?php
    include_once '../view/include/footer.php';
