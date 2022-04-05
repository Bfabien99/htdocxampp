<?php
//<>
    require "model/adminModel.php";
    class adminController extends adminModel{
        
        public function show(){
            $initModel = new adminModel();
            $call = $initModel->get();
            return $call;
        }

        public function update($id, $name, $pseudo, $email, $pass, $tel){
            $initModel = new adminModel();
            $call = $initModel->update($id, $name,$pseudo, $email, $pass, $tel);
            return $call;
        }
    }