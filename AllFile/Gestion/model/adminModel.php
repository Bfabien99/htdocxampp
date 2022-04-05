<?php
//<>
    class adminModel{
        
        public function dbConnect() 
        {
            $dsn="mysql:dbname=immovable;host=localhost";
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

        public function get()
        {
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM admin');
            $query->execute();
            $get = $query->fetch(PDO::FETCH_ASSOC);
            return $get;
        }

        public function update($id, $name,$pseudo, $email, $pass, $tel)
        {
            $db = $this->dbConnect();
            $query = $db->prepare('UPDATE admin SET name=:nom, pseudo=:pseudo, email=:email, passphrase=:pass, tel=:tel  WHERE id =:id');
            $query->execute([
                'id' => $id,
                'nom' => htmlspecialchars($name),
                'pseudo' => htmlspecialchars($pseudo),
                'email' => htmlspecialchars($email),
                'pass' => htmlspecialchars($pass),
                'tel' => htmlspecialchars($tel)
            ]);
        }

        public function verifyPassword($password){
            $db = $this->dbConnect();

        }

    }