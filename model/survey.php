<?php
    class Survey{
        private $totalVotes;
        private $results;

        public function __construct($totalVotes = null, $results = null){
            $this->totalVotes = $totalVotes;
            $this->results = $results;
        }

        public function getTotalVotes(){
            return $this->totalVotes;
        }

        public function getResults(){
            return $this->results;
        }
    }
?>