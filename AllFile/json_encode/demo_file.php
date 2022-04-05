<?php
    $person = new stdClass();
    $person->name = "Jean";
    $person->contact = "0546046765";
    $person->age = 25;

    $myJson = json_encode($person);
    echo $myJson;
?>