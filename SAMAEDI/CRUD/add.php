<?php
    require "Database.php";
    $database = new Database();


    if (isset($_POST["save"])) 
    {
        if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["age"])){
            $exist = $database->existPersonne($_POST["nom"],$_POST["prenom"]);
            if (!$exist) {
                $save = $database->addPersonne($_POST["nom"],$_POST["prenom"],$_POST["age"]);

                if ($save) {
                    $message = "<p class='success'>Personne Ajouté!</p>";
                }
                else {
                    $message = "<p class='error'>Désolé, nous ne pouvons donner suite à votre requête... Veuillez réessayer plus tard!</p>";
                }
            }
            else {
                $message = "<p class='error'>La personne est déja enregistrer</p>";
            }
            
        }
        else {
            $message = "<p class='error'>Veuillez remplir tous les champs</p>";
        }

        $_POST["nom"]=$_POST["prenom"]=$_POST["age"]="";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
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
        <h1>Ajouter une nouvelle personne</h1>
        <form action="" method="post">
            <div class="group">
                <label for="">Nom</label>
                <input type="text" name="nom" id="">
            </div>

            <div class="group">
                <label for="">Prenom</label>
                <input type="text" name="prenom" id="">
            </div>

            <div class="group">
                <label for="">Age</label>
                <input type="number" name="age" id="">
            </div>

            <input type="submit" value="Enregistrer" name="save">
        </form>
        <?php if (!empty($message)) echo $message;?>
    </div>
</body>
</html>