<?php
    require '../vendor/autoload.php';

    $router = new AltoRouter();
   
    $router->map('GET',"/social/",function()
    {   
        unset($_SESSION['user_pseudo']);
        header('location:/social/homepage');
    });

    $router->map('GET',"/social/homepage",function()
    {   
        require 'views/home.php'; 
    });

   
    $match = $router->match();

    if( is_array($match) && is_callable( $match['target'] ) ) 
    {
        call_user_func_array( $match['target'], $match['params'] ); 
    } 
    else 
    {
    // no route was matched
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    }