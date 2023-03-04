<?php
$titre = "projets";
include_once 'include/header.php';
include_once 'include/header.php';
?>

<?php
foreach ($resultProjects as $result) :
?>

    <h2><?= $result['title'] ?></h2>
    <p><?= $result['description'] ?></p>
    <a href="<?= $result['link'] ?>">Cliquez ici</a>
    <img src="<?= $result['img'] ?>" alt="">
    <a href="?id=<?= $result['id']?>">Cliquez pour voire plus détails </a>
<?php endforeach;
    