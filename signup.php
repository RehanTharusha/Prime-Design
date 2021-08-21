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
            margin: 30vh 20vh 60vh 20vh;
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
                
            }

            .input input{
                /* background-color: #87B077; */
                width: 100%;
                padding: 12px 20px;
                margin: 8px 20vh 8px 0;
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
                    margin-bottom: 20vh;
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

</div>
</body>


<?php
    include_once 'footer.php'
?>