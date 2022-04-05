<?php
    require 'class/Utilisateur.php';
    
    $user1 = new Utilisateur("Brou99","Brou","",35);
    $user2 = new Utilisateur("Zeus1","Zeus","Grrrr",905);

    echo $user1->afficherInfo();
    $user2->incrementAge();
    echo $user2->afficherInfo();
?>
    