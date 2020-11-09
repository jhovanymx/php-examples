<?php
    include_once "base-pdo.php";
    include_once "../model/user.php";

    class UserPdo extends BasePdo{
        public function exists($username, $password){
            $encryptedPassword = md5($password);
            $query = $this->connect()->prepare("SELECT username FROM users WHERE username = :username AND password = :password");
            $query->execute(["username" => $username, "password" => $encryptedPassword]);
            return $query->rowCount() > 0;
        }

        public function findByUsername($username){
            $query = $this->connect()->prepare("SELECT * FROM users WHERE username = :username");
            $query->execute(["username" => $username]);
            $data = $query->fetch();
            return new User($data["id"], $data["username"], $data["email"], $data["age"], $data["country"], $data["lastlogin"]);
        }
    }
?>