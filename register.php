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
    </section>

<?php
    include_once 'footer.php';
?>
