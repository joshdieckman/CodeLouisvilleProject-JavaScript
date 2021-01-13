<?php
	//config.php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "codelouproject";

	/* Attempt to connect to MySQL database */
	$link = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
