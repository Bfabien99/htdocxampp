<?php

class Person{
    public $name;
    public $age;
    public $address;

    public function __construct($name = null, $age = null, $address = null){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function presentation(){
        return sprintf("Bonjour, je m'appelle %s, j'ai %d ans et je habite à %s.".PHP_EOL, $this->name, $this->age, $this->address);
    } 

    public function setName($name){
        if (strlen($name) < 3) {
            return "Le nom doit contenir au moins 3 caractères.";
        }
        return $this->name = $name;
    }

    public function setAge($age){
        if ($age < 18) {
            return "Vous êtes trop jeune pour être un adulte.";
        }
        $this->age = $age;
        return "Vous avez ".$this->age." ans.";
    }

    public function setAddress($address){
        return $this->address = $address;
    }

    public function getName($name){
        return $this->name = mb_strtoupper($name);
    }

    public function getAge($age){
        return $this->age = $age;
    }

    public function getAddress($address){
        return $this->address;
    }
}
 
