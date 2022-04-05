<?php
    require 'vendor/autoload.php';
    require 'controller/immovableController.php';
    require 'controller/adminController.php';

    $router = new AltoRouter();
    $router->map('GET','/','home');
    $router->map('POST','/','home');
    $router->map('GET','/view/nouscontacter/','contact');
    $router->map('GET','/view/admin/','dashboard');
    $router->map('POST','/view/admin/','dashboard');
    $router->map('GET','/view/all/','allImmovable');
    $router->map('POST','/view/all/','allImmovable');
    $router->map('GET','/view/login/','login');
    $router->map('POST','/view/login/','login');
    $router->map('GET','/view/enregistrement/','saveImmovable');
    $router->map('POST','/view/enregistrement/','saveImmovable');
    $router->map('GET','/view/admin/viewdetails&property_[i:id]/','immovable');
    $router->map('POST','/view/admin/viewdetails&property_[i:id]/','immovable');
    $router->map('GET','/view/admin/view&more&property/','all');
    $router->map('POST','/view/admin/view&more&property/','all');
    $router->map('GET','/view/viewdetails&property_[i:id]/','immovableDetails');
    $router->map('POST','/view/viewdetails&property_[i:id]/','immovableDetails');
    $router->map('GET','/view/admin/delete&property_[i:id]/','deleteImmovable');
    $router->map('GET','/view/admin/update&property_[i:id]/','updateImmovable');
    $router->map('POST','/view/admin/update&property_[i:id]/','updateImmovable');
    $router->map('GET','/view/admin/update&name_[i:id]/','updateAdmin');
    $router->map('POST','/view/admin/update&name_[i:id]/','updateAdmin');
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
    