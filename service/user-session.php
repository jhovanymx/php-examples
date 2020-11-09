<?php
    class UserSession{
        public function __construct(){
            session_start();
        }

        public function setCurrent($user){
            $_SESSION['user'] = $user;
        }

        public function getCurrent(){
            return $_SESSION['user'];
        }

        public function close(){
            session_unset();
            session_destroy();
        }
    }
?>