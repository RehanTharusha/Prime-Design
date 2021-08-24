<?php
 include_once 'header.php'
 ?>
 
<style>

        body{
        background-color: #EFF0F4;    
    }

    .sign-up-container{
        display: flex;
        justify-content: space-evenly;
    }

    .form-background{
        display: flex;
        justify-content: space-evenly;
        margin: 30vh 30vh 60vh 30vh;
        background-color: #FBF8EF;
        border-radius: 8px;
        box-shadow: 0 16px 20px 0 rgba(0, 0, 0, 0.2);
    }

        .signup-form{
            display: flex;
            flex-direction: column;
            margin: 6vh;
        }

        .signup-form h2{
            font-family: 'Montserrat', sans-serif;
        }

        .input{
            display: flex;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            
        }

        .input input{
            /* background-color: #87B077; */
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #314B40;
            border-radius: 4px;
            transition: 0.5s;
        }

        .input input:focus {
             border: 3px solid #314B40;
        }

        .input button{
            background-color: #314B40;
            font-family: 'Spartan', sans-serif;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            transition: 0.5s;
        }

            .input button:hover{
                letter-spacing: 1px;
        }


        @media (max-width: 1024px){

            .form-background{
                margin: 30vh 0 30vh 0;
            }

            footer{
                display: none;
            }
        }

</style>

<body>
    
<div class="sign-up-container">

    <div class="form-background">
        <section class="signup-form">
            <h2>Log In</h2>

            <form action="Includes/login.inc.php" method="post">
                <div class="input">
                        <input type="text" name="uid" placeholder="Username/Email...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="Submit">Log In!</button>
                </div>
            </form>
                    
        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Please fill in all the fields!</p>";
        }

        elseif ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information. Try again</p>";
        }

    }

?>

        </section>

    </div>
</div>


</body>

<?php
    include_once 'footer.php'
?>