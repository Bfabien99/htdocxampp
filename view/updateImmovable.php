<?php
    $initController = new adminController;
    $admin = $initController->show();
    $initController = new immovableController;
    $getValue = $initController->cibleId((int)$params['id']);

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['name']) && !empty($_POST['tel']) && !empty($_POST['location']) && !empty($_POST['area']) && !empty($_POST['details']) && !empty($_POST['price'])){
            $submit = $_POST['submit'];
            $name = $_POST['name'];
            $tel = $_POST['tel'];
            $location = $_POST['location'];
            $area = $_POST['area'];
            $details = $_POST['details'];
            $price = $_POST['price'];
            $Call = $initController->update((int)$params['id'],$name, $tel, $location, $area, $details, $price);
            header('location:/view/admin/');
        }
        else
        {
            echo "Error";
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
    <link rel="stylesheet" href="/assets/css/save.css">
    <title>Document</title>
</head>
<body>
        <nav>
            <div class="left">
            <img src="/assets/image/profile_pic.png" alt="Defaultpic" width="50px" style="border-radius: 50%;">
            </div>
            <div class="logo"><h3>#<?= $admin['name']; ?></h3></div>
            <ul>
                <li><a href="/">Déconnexion</a></li>
                <li><a href="/view/enregistrement/">Ajouter</a></li>
                <li><a href="/view/admin/update&name_<?= $admin['id']; ?>/">Mettre à jour mes informations</a></li>
            </ul>
        </nav>
        <div class="box">
    <h3>Apporter une modification</h3>
    <form action="" method="post" enctype="multipart/form">
        <div class="group">
            <label for="owner">Nom Propriétaire</label>
            <input type="text" name="name" value="<?= $getValue['owner']?>">
        </div>

        <div class="group">
            <label for="tel">Contact Propriétaire</label>
            <input type="tel" name="tel" value="<?= $getValue['tel']?>">
        </div>

        <div class="group">
            <label for="location">Localisation de l'immobilier</label>
            <input type="text" name="location" value="<?= $getValue['location']?>">
        </div>

        <div class="group">
            <label for="area">Superficie de l'immobilier</label>
            <input type="text" name="area" value="<?= $getValue['area']?>">
        </div>

        <div class="group">
            <label for="details">Détails de l'immobilier</label>
            <input type="text" name="details" value="<?= $getValue['details']?>">
        </div>

        <div class="group">
            <label for="price">Prix de l'immobilier</label>
            <input type="text" name="price" value="<?= $getValue['price']?>">
        </div>
        <div class="group">
            <input type="submit" value="Ok" name="submit"><a href="/view/admin/" class="back">Retour</a>
        </div>
        
    </form>
    </div>
    
</body>
</html>