<?php

    class Database{

        public function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'root', '');
            return $db;
        }

        public function getPersonnes(){
            $db = $this->dbConnect();
            $query = $db->prepare("SELECT * FROM Personnes ORDER BY id DESC");
            $query->execute();
            $Personnes = $query->fetchAll(PDO::FETCH_ASSOC);

            if(!empty($Personnes)){
                return $Personnes;
            }
            else {
                return false;
            }
        }

        public function getPersonne($id){
            $db = $this->dbConnect();
            $query = $db->prepare("SELECT * FROM Personnes WHERE id = $id");
            $query->execute();
            $Personnes = $query->fetch(PDO::FETCH_ASSOC);

            if(!empty($Personnes)){
                return $Personnes;
            }
            else {
                return false;
            }
        }

        public function addPersonne($nom, $prenom, $age){
            $db = $this->dbConnect();
            $query = $db->prepare("INSERT INTO Personnes(nom,prenom,age) VALUES(:nom,:prenom,:age)");
            $add = $query->execute([
                ":nom" => $nom,
                ":prenom" => $prenom,
                ":age" => $age,
            ]);

            if($add){
                return true;
            }
            else {
                return false;
            }
        }

        public function existPersonne($nom, $prenom){
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM Personnes WHERE nom = '.'"'.$nom.'"'.'AND prenom ='.'"'.$prenom.'"');
            $query->execute();
            $Personnes = $query->fetch(PDO::FETCH_ASSOC);

            if(!empty($Personnes)){
                return $Personnes;
            }
            else {
                return false;
            }
        }

        public function updatePersonne($id,$nom,$prenom,$age){
            $db = $this->dbConnect();
            $query = $db->prepare('UPDATE Personnes  SET nom ='.'"'.$nom.'"'.', prenom = '.'"'.$prenom.'"'.', age = '.'"'.$age.'"'.' WHERE id = '.$id);
            $update = $query->execute();

            if($update){
                return true;
            }
            else {
                return false;
            }

        }

        public function deletePersonne($id){
            $db = $this->dbConnect();
            $query = $db->prepare("DELETE  FROM Personnes WHERE id = $id");
            $delete = $query->execute();

            if($delete){
                return true;
            }
            else {
                return false;
            }

        }

       
    }