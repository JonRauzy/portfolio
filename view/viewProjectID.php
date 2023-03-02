<?php
foreach ($projectSolo as $value) :
$titre = $value['title'];
include_once 'include/header.php';

    ?>
    <h2><?= $value['title'] ?></h2>
    <p><?= $value['description'] ?></p>
    <a href="<?= $value['link'] ?>">Cliquez ici</a>
    <img src="<?= $value['img'] ?>" alt="">
<?php
endforeach;
?>

<a href="../public/index.php">retour</a>