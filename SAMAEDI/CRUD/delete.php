<?php
    require "Database.php";
    $database = new Database();

    if ($_GET["id"]) {
        $delete = $database->deletePersonne($_GET["id"]);

        if($delete){
            header("location:../CRUD/");
        }
        else {
            echo "Erreur... Identifiant inconnue.<br>";
            echo "<a href='../CRUD/' class='back'>Retour</a>";
        }
    }