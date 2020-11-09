<?php
    include_once "../service/user-session.php";
    include_once "../service/user-service.php";

    $session = new UserSession();
    $userService = new UserService();
    $user = $session->getCurrent();
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(isset($user)){
        include_once "../view/home.php";
    }elseif(isset($username) && isset($password)){
        $user = $userService->authenticate($username, $password);
        if($user){
            $session->setCurrent($user);
            include_once "../view/home.php";
        }else{
            $errors = array("Usuario y/o contraseña incorrectos");
            include_once "../view/login.php";
        }
    }else{
        include_once "../view/login.php";
    }
?>