<?php
 include_once 'header.php'
 ?>
    <style>
              
        .form{
            display: flex;
            justify-content: space-evenly;
            background: black;
            color: white;
            border: black solid 2px;
            margin: 100px 40% 40% 40%;
        }

        .signup-form{
            display: flex;
            flex-direction: column;

        }

        .input{
            display: flex;
            flex-direction: column;
            max-width: 200px;
        }

        .input input{
            margin-bottom: 8px;
        }

    </style>

<div class="form">
    <section class="signup-form">
        <h2>Log In</h2>

        <form action="login.inc.php" method="post">
            <div class="input">
                    <input type="text" name="name" placeholder="Username/Email...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="Submit">Log In!</button>
            </div>
        </form>
    </section>
</div>

<?php
    include_once 'footer.php'
?>