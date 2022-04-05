<?php

    class AdminModel{

        public function dbconnect(){
            $db = new PDO('mysql:host=localhost;dbname=boutik;charset=utf8', 'root', '');
            return $db;
        }

        public function addProducts(){
            $db = $this->dbconnect();
            $query = $db->prepare('INSERT INTO products(name, price, description) VALUES(:name, :price, :description)');
            $query->execute(array(
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'description' => $_POST['description'],
            ));
        }

        public function removeProduct(){
            $db = $this->dbconnect();
            $query = $db->prepare('DELETE FROM products WHERE id = ?');
            $query->execute(array($_GET['id']));
        }
    }