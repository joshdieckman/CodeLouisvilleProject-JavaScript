<?php
//reset-password.php

// Include config file
require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Reset Your Password</h1>
        <p>An email will be sent to you with instructions on how to reset your password.</p>
        <form action="reset-request.php" method="post">
            <input type="text" name="email" placeholder="Enter your email address">
            <button type="submit" name="reset-request-submit">Receive new password by email</button>
        </form>
        <?php
            if(isset($_GET["reset"])){
                if($_GET["reset"] == "success"){
                    echo '<p class="signupsuccess">Check your email!</p>';
                }
            }
        ?>
    </div>
</body>
</html>
