<?php
    include_once "service/survey-service.php";

    $surveyService = new SurveyService();
    $id = $_POST["id"];
    $showResults = false;
    if(isset($id)){
        $surveyService->vote($id);
        $showResults = true;
    }

    $survey = $surveyService->fetch($showResults);

    include_once "view/survey.php";
?>