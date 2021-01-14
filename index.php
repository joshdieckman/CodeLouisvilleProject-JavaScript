<?php
//index.php

// Include config file
require_once "config.php";

if(empty($_SESSION['username'])){
	header("location: login.php");
}

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
        <h2>Home Page</h2>
        <?php if (isset($_SESSION[''])): ?>
			<div class="error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset ($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION['username'])): ?>
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<p><a href="index.php?logout='1'">Log Out</a></p>
		<?php endif ?>
    </div>
</body>
</html>
