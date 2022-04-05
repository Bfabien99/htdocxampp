<?php
    $limit=6;
    $initController = new immovableController;
    $Calls = $initController->obtainLimit($limit);

    if (isset($_POST['submit'])) {
        if (!empty($_POST['search'])) {
            $Calls = $initController->search($_POST['search']);
        }
        else 
        {
            $Calls = $initController->obtainLimit($limit);
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
    <div class="parent">
        <?php foreach($Calls as $call):?>
        <div class="child">
            <a href="/view/viewdetails&property_<?=$call['id']?>/">
                <div class="pic">
                </div>
                <h3>Superficie : <?= $call['area']?> m²</h3>
                <h3>Prix : <?= $call['price']?> fcfa</h3>
                <h3>Localisation : <?= $call['location']?></h3>
            </a>
        </div>
        <?php endforeach;?>
    </div>  

    

</body>
</html>