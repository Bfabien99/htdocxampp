<?php
    echo "Chargement de l'Utilisateur... <br><br>";

    class Utilisateur{

        //Propriété
        private $age = 0;
        private $login = "Inconnu";
        private $nom = "Inconnu";
        private $mdp = "";

        //Méthode
        public function __construct($_login,$_nom,$_mdp,$_age)
        {
            $this->login = $_login;
            $this->nom = $_nom;
            $this->mdp = $_mdp;
            $this->age = $_age;
        }

        public function incrementAge(){
            $this->age++;
        }

        //Va retourner toutes les propriétés de mon objet
        public function afficherInfo(){
            return "Login : ".$this->login."<br> Nom : ".$this->nom."<br> Age : ".$this->age."<br> Mot de passe :".$this->mdp."<br>";
        }

    }