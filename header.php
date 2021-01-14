<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
		<title>Gripe</title>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<script type="text/javascript" src="../js/app.js"></script>
	</head>
	<body>
        <nav class="nav">
            <ul>
                <a href="index.php">Logo Goes Here</a>
                <li><a href="index.php" class="selected">Home</a></li>
				<li><a href="about.php">About Us</a></li>
                <?php
                    if(isset($_SESSION["id"])){
                        echo "<li><a href='profile.php'>Profile</a></li>";
                        echo "<li><a href='logout.php'>Log Out</a></li>";
                    }else{
                        echo "<li><a href='register.php'>Sign Up</a></li>";
                        echo "<li><a href='login.php'>Log In</a></li>";
                    }
                ?>
            </ul>
        </nav>
        <div class="wrapper">
