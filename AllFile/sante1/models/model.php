<?php
    class model{

        private $connexion;

        public function __construct($db)
        {
            $this->connexion = $db;
        }
        
        public function showAll()
        {
            $query = 'SELECT * FROM medicaments';
            //prepare statement
            $stmt = $this->connexion->prepare($query);

            //execute statement
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }    
        
        
        
    }