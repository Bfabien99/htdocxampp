<?php

    class Cafetiere{

        //propriétés
        private $Prix;
        private $Couleur;
        private $Model;

        //Constructeur
        public function __construct($Prix,$Couleur,$Model)
        {
            $this->Prix = $Prix;
            $this->Couleur = $Couleur;
            $this->Model = $Model;
        }

        //méthodes
        public function allumer(){
            echo "<br>Je m'allume <br>";
        }

        public function chauffer(){
            echo "<br>Je fais couler le café <br>";
        }

        public function eteindre(){
            echo "<br>Je m'éteins <br>";
        }

        public function propriete(){
            echo "<br>Model : ".$this->Model;
        }

        public function prix(){
            echo "<br>Prix : ".$this->Prix;
        }

        public function couleur(){
            echo "<br>Couleur : ".$this->Couleur;
        }

        public function changeModel($newModel){
            $this->Model = $newModel;
        }

        public function changePrix($newPrix){
            $this->Prix = $newPrix;
        }

        public function changeCouleur($newCouleur){
            $this->Couleur = $newCouleur;
        }


    }