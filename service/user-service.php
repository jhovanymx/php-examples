<?php
    include_once "../pdo/user-pdo.php";
    include_once "../model/user.php";

    class UserService{
        public function authenticate($username, $password){
            $pdo = new UserPdo();
            if($pdo->exists($username, $password)){
                return $pdo->findByUsername($username);
            }else{
                return null;
            }
        }
    }
?>