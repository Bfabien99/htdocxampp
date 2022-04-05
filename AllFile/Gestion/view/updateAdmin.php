<?php
    $initController = new adminController;
    $admin = $initController->show();
    $initController = new adminController;
    $getValue = $initController->show();

    if (isset($_POST['upload'])) {
        if (!empty($_POST['pass'])) {
            $nom = $_POST['name'];
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $tel = $_POST['tel'];
            $save = $initController->update((int)$params, $nom, $pseudo, $email, $pass, $tel);
            header('location:/view/admin/');
        }
        else {
            $nom = $_POST['name'];
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $pass = $_POST['oldpass'];
            $tel = $_POST['tel'];
            $save = $initController->update((int)$params, $nom, $pseudo, $email, $pass, $tel);
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
            <h3>Modifier Informations</h3>
    <form action="" method="post">
    <div class="group">
            <label for="name">Nom</label>
            <input type="text" name="name" value="<?= $getValue['name']?>">
        </div>

        <div class="group">
            <label for="pseudo">Identifiant</label>
            <input type="tel" name="pseudo" value="<?= $getValue['pseudo']?>">
        </div>

        <div class="group">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?= $getValue['email']?>">
        </div>

        <div class="group">
            <label for="pass">Mot de passe</label>
            <input type="text" name="oldpass" value="<?= $getValue['passphrase']?>">
        </div>

        <div class="group">
            <label for="pass">Nouveau Mot de passe</label>
            <input type="text" name="pass" value="">
        </div>

        <div class="group">
            <label for="tel">Contact</label>
            <input type="tel" name="tel" value="<?= $getValue['tel']?>">
        </div>

        <div class="group">
            <input type="submit" value="Ok" name="upload"><a href="/view/admin/" class="back">Retour</a>
        </div>
    </form>
    </div>
</body>
</html>