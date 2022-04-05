<?php

namespace App\Controller;

class PostsController{

    public function show($slug,$id,$page)
    {
        echo "Je suis l'article $id de la page $page";
    }
}