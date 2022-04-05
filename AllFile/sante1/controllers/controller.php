<?php
    require 'models/model.php';


    class controller{

        public function All($db){
            $initModel = new model($db);
            $Calls = $initModel->showAll();
            return $Calls;
        }

    }