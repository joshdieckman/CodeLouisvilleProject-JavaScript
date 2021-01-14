<?php
    include_once 'header.php';
?>

    <section class="registration-form">
        <h2>Sign up to Gripe</h2>
        <form action="register.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="username" placeholder="Username...">
            <input type="password" name="password" placeholder="Password...">
            <input type="password" name="confirmpassword" placeholder="Confirm Password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
            if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyInputRegister"){
                    echo "<p>Please fill in all fields!</p>";
                }else if ($_GET["error"] == "invalidUsername"){
                    echo "<p>This username is invalid!</p>";
                }else if ($_GET["error"] == "invalidEmail"){
                    echo "<p>This email is invalid!</p>";
                }else if ($_GET["error"] == "passwordMatch"){
                    echo "<p>The passwords did not match!</p>";
                }else if ($_GET["error"] == "usernameExists"){
                    echo "<p>This username already exists. Please choose a new username.</p>";
                }else if ($_GET["error"] == "stmtfailed"){
                    echo "<p>Something went wrong! Please try again.</p>";
                }else if ($_GET["error"] == "none"){
                    echo "<p>Welcome to Gripe!</p>";
                }
            }
        ?>
    </section>

<?php
    include_once 'footer.php';
?>
