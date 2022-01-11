<?php
    $initController = new personController();
    $setValue = $initController->cibleId((int)$params['id']);

    if(isset($_POST['submit'])){
        if (!empty($_POST['nom']) && !empty($_POST['pseudo'])) 
        {
            $reqs = $initController->personUpdate((int)$params['id'],$_POST['nom'],$_POST['pseudo']);
            header('location:/');
        }
        else
        {
            echo "Remplir tous les champs";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
</head>
<body>

    <form action="" method="POST">
        <div class="group">
            <label for="">Nom</label>
            <input type="text" name="nom" value="<?= $setValue['nom'];?>">
        </div>

        <div class="group">
            <label for="">Pseudo</label>
            <input type="text" name="pseudo" value="<?= $setValue['pseudo'];?>">
        </div>

        <input type="submit" value="Valider" name="submit">
    </form>
    
</body>
</html>