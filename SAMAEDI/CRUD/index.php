<?php
    require "Database.php";
    $database = new Database();
    $allPersonnes = $database->getPersonnes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            width: 100%;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .container{
            width: 90%;
            min-width: 200px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0 auto;
            align-items: center;
            gap: 2em;
            padding: 20px;
        }

        a{
            text-decoration: none;
            color: white;
            padding: 5px 15px;
            font-size: 1.3rem;
            width: 30%;
            text-align: center;
            border-radius: 5px;
        }

        .add{
            background-color: green;
        }

        .delete{
            background-color: red;
        }

        .edit{
            background-color: #5C8DF9;
        }

        .box{
            display: flex;
            flex-direction: column;
            gap: 1.3em;
            width: 500px;
            align-items: center;
        }

        .content{
            display: flex;
            flex-direction: column;
            gap: 1em;
            background-color: white;
            width: 400px;
            padding: 10px 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <a href="add.php" class="add">Ajouter</a>
        <h1>Liste des Personnes</h1>
        <?php if(!empty($allPersonnes)):?>
            <div class="box">
                <?php foreach($allPersonnes as $personne):?>
                    <div class="content">
                        <h3>Nom et Prénoms : <?= $personne["nom"] . " " . $personne["prenom"]?></h3>
                        <h3>Age : <?= $personne["age"]?> ans</h3>
                        <div class="action">
                            <a href="edit.php?id=<?=$personne["id"]?>" class="edit">Editer</a>
                            <a href="delete.php?id=<?=$personne["id"]?>" class="delete">Supprimer</a>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
</body>
</html>