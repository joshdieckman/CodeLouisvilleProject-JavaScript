<?php

    function emptyInputRegister($name, $email, $username, $password, $confirmpassword){
        $result;
        if(empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmpassword)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    function invalidUsername($username){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/"), $username)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    function passwordMatch($password, $confirmpassword){
        $result;
        if($password !== $confirmpassword){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

?>
