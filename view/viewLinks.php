<?php

$titre = 'liens';
require_once '../view/include/header.php';
?>

<h1>Liens</h1>

<div class="container-links">
    <?php
    foreach ($resultLinks as $result):
        ?>
        <div class="link-solo">
            <h2><?= $result['title'] ?></h2><br>
            <p><?= $result['description'] ?></p><br>
            <a href="<?= $result['link'] ?>" target="_blank">Cliquez ici</a><br>
            <img src="<?= $result['img'] ?>" alt="" width="200px"><br>
            <hr>
        </div>
    <?php endforeach; ?>
  
</div>
<?php
include_once '../view/include/footer.php';