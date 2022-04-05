<?php

    class Personnage{

        private $nom;
        private $position;

        public function setNom($NewNom){
            $this->nom = $NewNom;
        }

        public function PresenteToi(){
            echo "Je suis ".$this->nom." <br>";
        }

        public function avancer(){
            $this->position += 1;
            echo "Position actuelle X = ".$this->position;
        }

        public function reculer(){
            $this->position -= 1;
            echo "Position actuelle X = ".$this->position;
        }

        public function position(){
            echo "Position actuelle X = ".$this->position;
        }
    }