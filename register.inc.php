<?php

    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];

        require_once 'config.php';
        require_once 'functions.inc.php';

        if(emptyInputRegister($name, $email, $username, $password, $confirmpassword) !== false){
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        if(invalidUsername($username) !== false){
            header("location: ../login.php?error=invalidusername");
            exit();
        }

        if(invalidEmail($email) !== false){
            header("location: ../login.php?error=invalidemail");
            exit();
        }

        if(passwordMatch($password, $confirmpassword) !== false){
            header("location: ../login.php?error=passwordsdontmatch");
            exit();
        }

        if(usernameExists($link, $username) !== false){
            header("location: ../login.php?error=usernametaken");
            exit();
        }

        createUser($link, $name, $email, $username, $password);

    }else{

        header("location: ../login.php");
        exit();
    }

?>
