<?php
$titre = "projets";
include_once 'include/header.php';

?>
<h1>Projets</h1>
<div class="projects">
    <?php
    foreach ($resultProjects as $result):
        ?>

        <div class="project-solo">
            <h2><?= $result['title'] ?></h2>
            <p><?= $result['description'] ?></p>
            <a href="?id=<?= $result['id'] ?>">Cliquez pour voire plus de détails</a>
            <img src="<?= $result['img'] ?>" alt=""><br>
            <?php if (!empty($result['link'])): ?>
                <a href="<?= $result['link'] ?>" target="_blank">Cliquez ici pour visiter la version en ligne</a>
            <?php else: ?>
                <p>!! Ce projet n'est pas en ligne !!</p>
            <?php endif; ?>

            <hr>
        </div>
    <?php endforeach; ?>
</div>
<?php
include_once '../view/include/footer.php';