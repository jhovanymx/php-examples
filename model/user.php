<?php
    class User{
        private $id;
        private $username;
        private $email;
        private $age;
        private $country;
        private $lastlogin;

        public function __construct($id = null, $username = null, $email = null, $age = null, $country = null, $lastlogin = null){
            $this->id = $id;
            $this->username = $username;
            $this->email = $email;
            $this->age = $age;
            $this->country = $country;
            $this->lastlogin = $lastlogin;
        }

        public function getUsername(){
            return $this->username;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getAge(){
            return $this->age;
        }

        public function getCountry(){
            return $this->country;
        }

        public function getLastlogin(){
            return $this->lastlogin;
        }
    }
?>