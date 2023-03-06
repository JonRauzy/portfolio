<?php

$titre = 'liens';
require_once '../view/include/header.php';

foreach ($resultLinks as $result) :
?>

    <h2><?= $result['title'] ?></h2><br>
    <p><?= $result['description'] ?></p><br>
    <a href="<?= $result['link'] ?>">Cliquez ici</a><br>
    <img src="<?= $result['img'] ?>" alt="" width="200px"><br>
<?php endforeach; ?>

<?php
include_once '../view/include/footer.php';

