<?php
    require 'vendor/autoload.php';
    require 'controller/personController.php';
    
    $router = new AltoRouter();
    $router->map('GET','/','home','acceuil');
    $router->map('GET','/view/enregistrement','enregistrement',"addPage");
    $router->map('POST','/view/enregistrement','enregistrement');
    $router->map('GET','/view/delete&username=[*:nom][i:id]','delete');
    $router->map('GET','/view/update&username=[*:nom][i:id]','update');
    $router->map('POST','/view/update&username=[*:nom][i:id]','update');
    $match = $router->match();

    if($match !== null)
    {

        if (is_callable($match['target'])) {
            call_user_func_array($match['target'],$match['params']);
        }
        else {
            $params = $match['params'];
            require "view/{$match['target']}.php";
        }

    }

    else
    {
        echo "no Match";
    }
