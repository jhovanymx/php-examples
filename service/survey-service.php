<?php
    include_once "pdo/survey-pdo.php";
    include_once "model/survey.php";

    class SurveyService{
        public function fetch($showResults = false){
            $pdo = new SurveyPdo();
            $results = $pdo->findAll();
            $totalVotes = null;
            if($showResults){
                $totalVotes = $pdo->getTotalVotes();
                foreach($results as &$row){
                    $row["percentage"] = round((intval($row["votes"]) / $totalVotes) * 100, 0);
                }
            }
            return new Survey($totalVotes, $results);
        }

        public function vote($id){
            $pdo = new SurveyPdo();
            $pdo->vote($id);
        }
    }
?>