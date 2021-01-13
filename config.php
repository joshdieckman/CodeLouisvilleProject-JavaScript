<?php
	//config.php

	$servername = "db5001102249.hosting-data.io";
	$username = "dbu19026";
	$password = "D!3ckm@n";
	$db = "dbs945854";

	/* Attempt to connect to MySQL database */
	$link = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
