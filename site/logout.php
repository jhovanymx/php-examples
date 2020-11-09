<?php
    include_once "../service/user-session.php";

    $session = new UserSession();
    $session->close();
    
    header("location: index.php");
?>