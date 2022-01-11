<?php
    $initController = new personController();
    $reqs = $initController->personShow(10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php foreach($reqs as $person):?>

            <div class="box">
            <h1 class="id"><?= $person['id'] ?></h1>
            <h2>Tu t'appelles : </h2><strong><?= $person['nom'] ?></strong>
            <h2>Ton pseudo est : </h2><em><?= $person['pseudo'] ?></em>
            <div class="box">
                <a href="/view/delete&username=<?=$person['nom'];?><?=$person['id'];?>" class="delete">
                    <em>supp</em>
                </a>
                <a href="/view/update&username=<?=$person['nom'];?><?=$person['id'];?>" class="update">
                    <em>modif</em>
                </a>
            </div>
            </div>
            <hr>
        <?php endforeach;?>
    </div>
    <a href="<?= $router->generate('addPage'); ?>" class ="add">Ajouter</a>
</body>
</html>