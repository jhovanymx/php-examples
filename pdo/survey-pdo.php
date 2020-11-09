<?php
    include_once "base-pdo.php";

    class SurveyPdo extends BasePdo{
        public function vote($id){
            $query = $this->connect()->prepare("UPDATE desserts SET votes = votes + 1 WHERE id = :id");
            $query->execute(["id" => $id]);
        }

        public function findAll(){
            $query = $this->connect()->query("SELECT * FROM desserts");
            return $query->fetchAll();
        }

        public function getTotalVotes(){
            $query = $this->connect()->query("SELECT SUM(votes) AS total_votes FROM desserts");
            return intval($query->fetch(PDO::FETCH_OBJ)->total_votes);
        }
    }
?>