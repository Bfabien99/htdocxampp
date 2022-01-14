<?php
//<>
    require 'model/immovableModel.php';

    class immovableController extends immovableModel{
        
        public function testConnection() 
        {
            $initModel = new immovableModel();
            $connectModel = $initModel->dbConnect();
            return $connectModel; 
        }

        public function save($name, $tel, $location, $area, $details, $price){
            $initModel = new immovableModel();
            $callModel = $initModel->set($name, $tel, $location, $area, $details, $price);
            return $callModel;
        }

        public function update($id,$name, $tel, $location, $area, $details, $price){
            $initModel = new immovableModel();
            $callModel = $initModel->update($id, $name, $tel, $location, $area, $details, $price);
            return $callModel;
        }

        public function obtainAll(){
            $initModel = new immovableModel();
            $callModel = $initModel->getAll();
            return $callModel;
        }

        public function obtainLimit($limite){
            $initModel = new immovableModel();
            $callModel = $initModel->getLimite($limite);
            return $callModel;
        }

        public function cibleId($id){
            $initModel = new immovableModel();
            $callModel = $initModel->cible($id);
            return $callModel;
        } 

        public function unset($id){
            $initModel = new immovableModel();
            $callModel = $initModel->unset($id);
            return $callModel;
        }

        public function search($key){
            $initModel = new immovableModel();
            $callModel = $initModel->search($key);
            return $callModel;
        }

        public function searchAdmin($key){
            $initModel = new immovableModel();
            $callModel = $initModel->searchAdmin($key);
            return $callModel;
        }

    }