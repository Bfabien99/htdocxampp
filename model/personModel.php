<?php
    class personModel{
        
        public function dbConnect()
        {
            $dsn="mysql:dbname=testMVC;host=localhost";
            $password = "";
            $user = "root";

            $connect = new PDO($dsn,$user,$password,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]);

            if (!$connect) 
            {
                return new \Exception("Database cannot connect");
            }
            else
            {   
                return $connect;
            }

        }

        public function setPerson($nom, $pseudo){
            $db = $this->dbConnect();
            $query = $db->prepare('INSERT INTO test(nom, pseudo) VALUES (:nom, :pseudo)');
            $query->execute([
                'nom' => htmlspecialchars($nom),
                'pseudo' => htmlspecialchars($pseudo),
            ]);

        }

        public function getPerson($limite){
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM test LIMIT '.$limite);
            $query->execute();
            $get = $query->fetchAll(PDO::FETCH_ASSOC);
            return $get;
        }

        public function getAllPersons(){
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM test');
            $query->execute();
            $get = $query->fetchAll(PDO::FETCH_ASSOC);
            return $get;
        }

        public function unsetPerson($id){
            $db = $this->dbConnect();
            $query = $db->prepare('DELETE FROM test WHERE id=:id');
            $query->execute([
                'id' => $id
            ]);
        }

        public function ciblePerson($id){
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM test WHERE id=:id');
            $query->execute([
                'id' => $id
            ]);
            $get = $query->fetch(PDO::FETCH_ASSOC);
            return $get;
        }

        public function updatePerson($id,$nom,$pseudo){
            $db = $this->dbConnect();
            $query = $db->prepare('UPDATE test SET nom=:nom, pseudo=:pseudo WHERE id =:id');
            $query->execute([
                'id' => $id,
                'nom' => htmlspecialchars($nom),
                'pseudo' => htmlspecialchars($pseudo)
            ]);
        }

    }