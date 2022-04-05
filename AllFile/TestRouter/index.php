<?php 
    require 'vendor/autoload.php';


    $router = new App\Router\Router($_GET['url']);

    $router->get('/',function(){ echo 'Homepage'; });

    $router->get('/posts',function(){ echo 'Tous les articles'; });

    $router->get('/article/:slug-:id/:page','Posts#show')->with('id', '[0-9]+')->with('slug', '[a-z\-0-9]+');
    $router->get('/article/:slug-:id','Posts#show')->with('id', '[0-9]+')->with('slug', '[a-z\-0-9]+');

    $router->get('/posts/:id',"Posts#show");
    $router->post('/posts:id',function($id){ echo 'Poster pour l\'article '.$id; });
    $router->run();