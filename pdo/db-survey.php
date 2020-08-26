<?php
    include_once("db.php");

    class Survey extends DB{
        private $totalVotes;

        public function vote($id){
            $query = $this->connect()->prepare("UPDATE desserts SET votes = votes + 1 WHERE id = :id");
            $query->execute(["id" => $id]);
        }

        public function list(){
            $query = $this->connect()->query("SELECT * FROM desserts");
            return $query->fetchAll();
        }

        public function getTotalVotes(){
            $query = $this->connect()->query("SELECT SUM(votes) AS total_votes FROM desserts");
            $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->total_votes;
            return $this->totalVotes;
        }

        public function getPercetageVotes($votes){
            return round(($votes / $this->totalVotes) * 100, 0);
        }
    }
?>