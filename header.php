<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@800&display=swap" rel="stylesheet">

    <!-- Fraunces Font -->
    <!-- font-family: 'Fraunces', serif; -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,600;1,600&family=Fraunces:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">

    <!-- league spartan font -->
    <!-- font-family: 'Spartan', sans-serif;  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Montserrat font -->
    <!-- font-family: 'Montserrat', sans-serif; -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">

    <!-- Playfair font -->
    <!-- font-family: 'Playfair Display', serif; -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,600&display=swap" rel="stylesheet">

    <!-- Work Sans font -->
    <!-- font-family: 'Work Sans', sans-serif; -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;400&display=swap" rel="stylesheet">


    <!-- newsletter-icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="mobileStyles.css">

    
    <title>Prime Design | Now On Sale!</title>
</head>

<style>
    @media (max-width: 1024px){

    .desktop-header{
        display: none;
    }


    /* this part is the mobile header */

    .header .logo{
        filter: invert(1);
        width: 20vh;
    }


    .header li {
        list-style: none;
    }

    .header a {
        text-decoration: none;
    }

    .header{
        display: block;
        border-bottom: 1px solid #E2E8F0;
        padding: 0;
    }

    .header .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.5rem;
    }

    .header .hamburger {
        display: none;
    }

    .header .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        background-color: #101010;
    }

    .header .nav-menu {
        margin-top: 4vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header .nav-item {
        margin-left: 5rem;
    }

    .header .nav-link{
        font-size: 1.6rem;
        font-weight: 400;
        color: #475569;
    }

    .header .nav-link:hover{
        color: #482ff7;
    }

    .header .nav-logo {
        font-size: 2.1rem;
        font-weight: 500;
        color: #482ff7;
    }

        .header ul{
            z-index: 10000000000000;
        }
        .header .nav-menu {
            position: fixed;
            left: -100%;
            top: 5rem;
            flex-direction: column;
            background-color: #fff;
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
        }

        .header .nav-menu.active {
            left: 0;
        }

        .header .nav-item {
            margin: 2.5rem 0;
        }

        .header .hamburger {
            display: block;
            cursor: pointer;
        }

        .header .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .header .hamburger.active .bar:nth-child(1) {
            -webkit-transform: translateY(8px) rotate(45deg);
            transform: translateY(8px) rotate(45deg);
        }

        .header .hamburger.active .bar:nth-child(3) {
            -webkit-transform: translateY(-8px) rotate(-45deg);
            transform: translateY(-8px) rotate(-45deg);
        }
    }


</style>


<body>
    
<header class="desktop-header">

    <img class="logo" src="Images/logo.png" alt="">

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="https://prime-designs-shop.000webhostapp.com/">Shop</a></li>
        <li><a href="about.php">About</a></li>
        
        <?php
        // if (isset($_SESSION["useruid"])) {
        //     echo "<li><a href='login.php'>Log In</a></li>";
        //     echo "<li><a href='signup.php'>Sign Up</a></li>";
        // }

        // else {
        //     echo "<li><a href='login.php'>Log In</a></li>";
        //     echo "<li><a href='signup.php'>Sign Up</a></li>";
        // }
        ?>


        <li><a href="login.php">Log In</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        
    </ul>
</header>

    <header class="header">
        <nav class="navbar">
            <img class="logo" src="Images/logo.png" alt="">
            
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="https://prime-designs-shop.000webhostapp.com/" class="nav-link">Shop</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link">Sign Up</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
</body>

<script>
    const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const navLink = document.querySelectorAll(".nav-link");

hamburger.addEventListener("click", mobileMenu);
navLink.forEach(n => n.addEventListener("click", closeMenu));

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}
</script>
</html>