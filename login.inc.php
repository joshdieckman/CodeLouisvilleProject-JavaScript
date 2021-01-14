<?php
    if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        require_once 'config.php';
        require_once 'functions.inc.php';

        if(emptyInputLogin($username, $password) !== false){
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        loginUser($link, $username, $password);
    }else{
        header("location: ../login.php");
        exit();
    }

?>
