<?php
    $limite = 6;
    $initController = new adminController;
    $admin = $initController->show();
    $initController2 = new immovableController;
    $immovables = $initController2->getLimite($limite);
    if (isset($_POST['submit'])) {
        if (!empty($_POST['search'])) {
            $immovables = $initController2->search($_POST['search']);
        }
        else 
        {
            $immovables = $initController2->getLimite($limite);
            header('location:/view/admin/');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <title>Document</title>
</head>
<body>
        <nav>
            <div class="left">
                <img src="/assets/image/profile_pic.png" alt="Defaultpic" width="50px" style="border-radius: 50%;">
                <form action="" method="post">
                <input type="search" name="search" placeholder="recherche..." title="Entrer le prix ou la localité qui vous interesse">
                <input type="submit" value="go" name="submit">
                </form>
            </div>
            <div class="logo"><h3>#<?= $admin['name']; ?></h3></div>
            <ul>
                <li><a href="/">Déconnexion</a></li>
                <li><a href="/view/enregistrement/">Ajouter</a></li>
                <li><a href="/view/admin/update&name_<?= $admin['id']; ?>/">Mettre à jour mes informations</a></li>
            </ul>
        </nav>
        <div class="box">
            <?php foreach ($immovables as $immovable):?>
            <div class="content">
                <a href="/view/admin/viewdetails&property_<?=$immovable['id']?>/" class="show">
                    <img src="/assets/image/house_img.svg" alt="houseimg">
                    <h5>Proprio: <?=$immovable['owner']?></h5>
                    <h5>Contact: <?=$immovable['tel']?></h5>
                    <h5>Localité: <?=$immovable['location']?></h5>
                </a>
                <div class="action">
                <a href="/view/admin/update&property_<?=$immovable['id']?>/" class="update">modif</a>
                <a href="/view/admin/delete&property_<?=$immovable['id']?>/" class="delete">supp</a>
                </div>
            </div>
            <?php endforeach?>
            <?php if ($immovables == null ):?>
                <h4>Aucun Résultat</h4>
            <?php endif; ?>
        </div>
        <a href="/view/admin/view&more&property/" class="more">Voir Tout</a>
</body>
</html>