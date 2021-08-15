<?php
 include_once 'header.php'
 ?>


<div class="form">
    <section class="signup-form">
        <h2>Sign Up</h2>

        <form action="Includes/signup.inc.php" method="post">
            <div class="input">
                    <input type="text" name="name" placeholder="Full name...">
                    <input type="text" name="email" placeholder="Email...">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password...">
                    <input type="password" name="repeatpwd" placeholder="Repeat password...">
                    <button type="submit" name="submit">Sign Up!</button>
            </div>
        </form>
    </section>
</div>

<?php
    include_once 'footer.php'
?>