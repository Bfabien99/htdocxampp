<?php

    class BoutikModel{

        public function dbconnect(){
            $db = new PDO('mysql:host=localhost;dbname=boutik;charset=utf8', 'root', '');
            return $db;
        }

        public function getAllProducts(){
            $db = $this->dbconnect();
            $query = $db->query('SELECT * FROM products');
            $products = $query->fetchAll(PDO::FETCH_OBJ);
            return $products;
        }

        public function getProduct($id){
            $db = $this->dbconnect();
            $query = $db->prepare('SELECT * FROM products WHERE id = ?');
            $query->execute(array($id));
            $product = $query->fetch(PDO::FETCH_OBJ);
            return $product;
        }

        

    }