<?php
$initController = new adminController;
$admin = $initController->show();
$initController2 = new immovableController;
$Calls = $initController2->cibleId((int)$params['id']);
$immovable = $initController2->cibleId((int)$params['id']);

if (isset($_POST['submit'])) {
    if (!empty($_POST['search'])) 
    {
        $immovables = $initController2->searchAdmin($_POST['search']);
        header('location:/view/admin/');
    }
    else 
    {
        $immovables = $initController2->getAll();
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
            <div class="content">
            <img src="/assets/image/house_img.svg" alt="houseimg">
            <h3>Proprio: <?= $Calls['owner']?></h3>
            <h3>Numéro: <?= $Calls['tel']?></h3>
            <h3>Localisation: <?= $Calls['location']?></h3>
            <h3>Détails: <?= $Calls['details']?></h3>
            <h3>Superficie: <?= $Calls['area']?></h3>
            <h3>Prix: <?= $Calls['price']?></h3>
            <div class="action">
                <a href="/view/admin/update&property_<?=$immovable['id']?>/" class="update">modif</a>
                <a href="/view/admin/delete&property_<?=$immovable['id']?>/" class="delete">supp</a>
                <a href="/view/admin/" class="retour">Retour</a>
            </div>
            
            </div>
        </div>
</body>
</html>