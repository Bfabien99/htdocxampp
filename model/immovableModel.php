<?php
//<>
    class immovableModel{
        
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

        public function set($name, $tel, $location, $area, $details, $price)
        {
            // $img_name = $picture['name'];
            // $img_size = $picture['size'];
            // $tmp_name = $picture['tmp_name'];
            // $error = $picture['error'];
    
            // if($error === 0)
            // {
            //     if ($img_size > 1250000) 
            //     {
            //         echo "File too large";
            //     }
            //     else 
            //     {
            //         $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            //         $img_ex_lc = strtolower($img_ex);
    
            //         $allowed_exs = array("jpg", "png", "jpeg");
    
            //         if(in_array($img_ex_lc, $allowed_exs))
            //         {
            //             $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            //             $img_upload_path = '/assets/image/'.$new_img_name;
            //             move_uploaded_file($tmp_name, $img_upload_path);
                        $db = $this->dbConnect();
                        $query = $db->prepare('INSERT INTO property(owner, tel, postdate, location, area, details, price) VALUES (:name, :tel, :date, :location, :area, :details, :price)');
                        $query->execute([
                            'name' => $name,
                            'tel' => $tel,
                            'date' => date('Y-m-d H-M-i'),
                            'location' => $location,
                            'area' => $area,
                            'details' => $details,
                            'price' => $price
                        ]);
            //         }
            //     }
            // }
            // else 
            // {
            //     echo "unknown error";
            // }


        }

        public function getLimite($limite)
        {
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM property ORDER BY id DESC LIMIT '.$limite);
            $query->execute();
            $get = $query->fetchAll(PDO::FETCH_ASSOC);
            return $get;
        }

        public function getAll()
        {
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM property');
            $query->execute();
            $get = $query->fetchAll(PDO::FETCH_ASSOC);
            return $get;
        }

        public function unset($id)
        {
            $db = $this->dbConnect();
            $query = $db->prepare('DELETE FROM property WHERE id=:id');
            $query->execute([
                'id' => $id
            ]);
        }

        public function cible($id)
        {
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM property WHERE id=:id');
            $query->execute([
                'id' => $id
            ]);
            $get = $query->fetch(PDO::FETCH_ASSOC);
            return $get;
        }

        public function search($key)
        {
            $db = $this->dbConnect();
            $location = '%'. $key .'%';
            $query = $db->prepare('SELECT * FROM property WHERE price <= :price OR location LIKE :location');
            $query->execute([
                'price' => $key,
                'location' => $location,
            ]);
            $get = $query->fetchAll(PDO::FETCH_ASSOC);
            return $get;
        }

        public function searchAdmin($key)
        {
            $db = $this->dbConnect();
            $text = '%'. $key .'%';
            $query = $db->prepare('SELECT * FROM property WHERE price <= :price OR location LIKE :location OR owner LIKE :name');
            $query->execute([
                'price' => $key,
                'location' => $text,
                'name' => $text,
            ]);
            $get = $query->fetchAll(PDO::FETCH_ASSOC);
            return $get;
        }

        public function update($id, $name, $tel, $location, $area, $details, $price)
        {
            $db = $this->dbConnect();
            $query = $db->prepare('UPDATE property SET owner=:name, tel=:tel, postdate=:date, location=:location, area=:area, details=:details, price=:price WHERE id=:id');
            $query->execute([
                'id' => $id,
                'name' => $name,
                'tel' => $tel,
                'date' => date('Y-m-d H-M-i'),
                'location' => $location,
                'area' => $area,
                'details' => $details,
                'price' => $price
            ]);
        }

    }