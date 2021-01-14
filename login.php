<?php
    include_once 'header.php';
?>

    <section class="signin-form">
        <h2>Sign In to Gripe</h2>
        <form action="signin.inc.php" method="post">
            <input type="text" name="username" placeholder="Username/Email...">
            <input type="password" name="password" placeholder="Password...">
            <button type="submit" name="submit">Sign In</button>
        <?php
            if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyInputRegister"){
                    echo "<p>Please fill in all fields!</p>";
                }else if ($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect login information!</p>";
                }
            }
        ?>
    </section>

<?php
    include_once 'footer.php';
?>
