<?php
    $initController = new immovableController;
    $Calls = $initController->cibleId((int)$params['id']);
    if (isset($_POST['submit'])) {
        if (!empty($_POST['search'])) {
            $Calls = $initController->search($_POST['search']);
            header('location:/');
        }
        else 
        {
            $Calls = $initController->cibleId((int)$params['id']);
            header('location:/');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="topbar">
            <h2>#GestionImmobilier</h2>
            <form action="" method="post">
            <input type="search" name="search" placeholder="recherche..." title="Entrer le prix ou la localité qui vous interesse">
            <input type="submit" value="go" name="submit">
            </form>
        </div>
        <div class="banner">
            <!-- <img src="" alt=""> -->
            <h3></h3>
        </div>
    </header>
    <nav>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>
                <a href="/view/login/" target="_blank">Connexion</a>
            </li>
            <li>
                <a href="/view/all/">Toutes les propriétés</a>
            </li>
            <li>
                <a href="/view/nouscontacter/">Nous Contacter</a>
            </li>
        </ul>
    </nav>
    <div class="box">
        <div class="parent2">
            <div class="child">
                <div class="pic2">
                </div>
                <div class="info">
                    <h3>Proprio: <?= $Calls['owner']?></h3>
                    <h3>Numéro: <?= $Calls['tel']?></h3>
                    <h3>Localisation: <?= $Calls['location']?></h3>
                    <h3>Détails: <?= $Calls['details']?></h3>
                    <h3>Superficie: <?= $Calls['area']?></h3>
                    <h3>Prix: <?= $Calls['price']?></h3>
                </div>
            
        </div>
        </div>
    </div>
    
    <a href="/">Retour</a>
</body>
</html>