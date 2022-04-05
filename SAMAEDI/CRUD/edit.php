<?php
    require "Database.php";
    $database = new Database();
    $message = "";

    if ($_GET["id"]) {
        $getPersonne = $database->getPersonne($_GET["id"]);
        if(!empty($getPersonne)){
            $nom = $getPersonne["nom"];
            $prenom = $getPersonne["prenom"];
            $age = $getPersonne["age"];
        }
        else {
            header("location:index.php");
        }
    }

    if (isset($_POST["update"])) 
    {
        if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["age"])){
            $update = $database->updatePersonne($_GET["id"],$_POST["nom"],$_POST["prenom"],$_POST["age"]);
            if ($update) {
                $message = "<p class='success'>Modifications apportées !</p>";
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $age = $_POST["age"];
            }
            else {
                $message = "<p class='error'>Désolé, nous ne pouvons donner suite à votre requête... Veuillez réessayer plus tard!</p>";
            }
        }
        else {
            $message = "<p class='error'>Veuillez remplir tous les champs</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer</title>
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

        .back{
            background-color: #333;
        }

        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 500px;
            background-color: #fff;
            padding: 15px ;
            gap: 1.2em;
        }

        .group{
            display: flex;
            flex-direction: column;
            width: 90%;
            gap: 0.3em;
        }

        input{
            outline: none;
            border: none;
        }

        .group input{
            height: 30px;
            padding: 10px;
            border: 1px solid #333;
        }

        input[type="submit"]{
            width: 30%;
            padding: 10px;
            background-color: green;
            color: white;
            border-radius: 3px;
        }

        .error{
            font-style: italic;
            color: red;
        }

        .success{
            font-style: italic;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
    <a href="../CRUD/" class="back">Retour</a>
        <div class="box">
            <h1>Nom : <?= $nom?></h1>
            <h1>Prenom : <?= $prenom?></h1>
            <h1>Age : <?= $age?></h1>
        </div>
        <form action="" method="post">
            <h3>Modifier</h3>
            <div class="group">
                <label for="">Nom</label>
                <input type="text" name="nom" id="" value="<?= $nom;?>">
            </div>

            <div class="group">
                <label for="">Prenom</label>
                <input type="text" name="prenom" id="" value="<?= $prenom;?>">
            </div>

            <div class="group">
                <label for="">Age</label>
                <input type="number" name="age" id="" value="<?= $age;?>">
            </div>
            <?php if (!empty($message)) echo $message;?>
            <input type="submit" value="Enregistrer" name="update">
        </form>
    </div>
</body>
</html>