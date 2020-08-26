<?php
    class DB{
        private $host;
        private $dbname;
        private $user;
        private $password;

        public function __construct(){
            $this->host = "127.0.0.1";
            $this->user = "root";
            $this->password = "root";
            $this->dbname = "test";
        }

        public function connect(){
            $host = $this->host;
            $dbname = $this->dbname;
            try{
                $conn = "mysql:host=$host;dbname=$dbname";
                $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                return new PDO($conn, $this->user, $this->password, $options);
            }catch(PDOException $e){
                print_r("Error connection: " . $e->getMessage());
            }
        }
    }
?>