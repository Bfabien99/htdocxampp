<?php
require_once 'config/dbConnect.php';
    require 'controllers/controller.php';

    $database = new Database();
    $db = $database->connect();

    $initController = new controller($db);
    $Calls = $initController->All($db); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <title>Test</title>
    <style>
        img{
            height: 700px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light w-100 h-20">
        
            <div class="logo d-flex flex-row w-auto m-2">
                <h3 class="text-success">Pharma</h3><h1 class="text-danger">+</h1>
            </div>
            <ul class="navbar-nav m-auto d-flex flex-row justify-content-around w-50">
                <li class="list-item"><a href="" class="nav-link text-success">Accueil</a></li>
                <li class="list-item"><a href="" class="nav-link text-success">Medicaments</a></li>
                <li class="list-item"><a href="" class="nav-link text-success">Contact</a></li>
                <li class="list-item"><a href="" class="nav-link text-success">Log in</a></li>
            </ul>
            <form action="" method="get" class="form-inline w-25 m-2 col-xs-12">
                <input type="search" name="search" id="search" placeholder="Nom d'un médicament" class="form-control">
                <button type="submit" class="btn btn-success">Go</button>
            </form>
        
        
    </nav>
    <div class="container">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
    <div class="carousel-item active">
      <img class="d-block w-100" src="martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg" alt="First slide" data-holder-rendered="true">
      <div class="carousel-caption d-none d-md-block">
      Photo by <a href="https://unsplash.com/@mdominguezfoto?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Martha Dominguez de Gouveia</a> on <a href="https://unsplash.com/s/photos/doctor?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
      </div>
      
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="roberto-sorin-RS0-h_pyByk-unsplash.jpg" alt="Second slide" data-holder-rendered="true">
      <div class="carousel-caption d-none d-md-block">
      Photo by <a href="https://unsplash.com/@roberto_sorin?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Roberto Sorin</a> on <a href="https://unsplash.com/s/photos/medicaments?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="nathan-dumlao-bRdRUUtbxO0-unsplash.jpg" alt="Third slide" data-holder-rendered="true">
      <div class="carousel-caption d-none d-md-block">
      Photo by <a href="https://unsplash.com/@nate_dumlao?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Nathan Dumlao</a> on <a href="https://unsplash.com/s/photos/healthy-eating?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        <?php foreach ($Calls as $call):?>
            <h1><?= $call['nom'] ?></h1>
        <?php endforeach; ?>
    </div>
</body>
</html>