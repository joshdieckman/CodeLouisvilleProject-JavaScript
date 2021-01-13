<?php
    include_once 'header.php';
?>

    <section class="signin-form">
        <h2>Sign In to Gripe</h2>
        <form action="signin.inc.php" method="post">
            <input type="text" name="name" placeholder="Username/Email...">
            <input type="password" name="password" placeholder="Password...">
            <button type="submit" name="submit">Sign In</button>
    </section>

<?php
    include_once 'footer.php';
?>
