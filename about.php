<?php
 include_once 'header.php'
 ?>


<style>
    body{
        background-color: #EFF0F4;
    }

    .about-background{
        margin: 20vh 30vh 30vh 30vh;
        background-color: #FBF8EF;
        border-radius: 8px;
        box-shadow: 0 16px 20px 0 rgba(0, 0, 0, 0.2);
    }

    .about-container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        text-align: justify;
        padding: 8vh;
        
    }

    .about-logo{
        max-width: 50vh;
        width: 100%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
        filter: invert(1);
    }

    .about-container h1{
        margin-top: 4vh;
        font-family: 'Playfair Display', serif;
        text-align: center;
    }

    
    .about-container p{
        margin-top: 10vh;
    }

    .about-socials{
        margin-left: 50px;
        margin-right: 30px;
    }

    .about-socials h2{
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        margin-top: 20px;
        margin-bottom:10px;
        color: #000;
        padding-right: 15px;
        padding-left: 5px;
    }

    .about-socials-container{
        display: flex;
        justify-content: center;
    }

    .about-socials a{
        text-decoration: none;
        color: #fff;
        margin-bottom: 10px;
        padding-left: 5px;
        font-size: 17px;
        margin-right: 20px;
        transform: scale(0.6);
        transition: 0.5s;
    }

    .about-socials a:hover{
        transform: scale(0.5) translateY(-15px);
    }

    @media (max-width: 1024px){
        .about-background{
            margin: 20vh 0 0 0;
        }

        .about-container h1{
            font-size: 2rem;
        }

    }

</style>


<body>
     
    <div class="about-background">
    

        <div class="about-container">

            <img src="Images/logo.png" alt="" class="about-logo">

            <h1>About Us</h1>

            <p>We are the opposite of fast fashion.

                Our collection of products are handmade in Britain & beyond in small batches in collaboration with artists and makers – bringing our ideas and sketch book scribbles to life.
                
                Each product is made in a way that is respectful and fair to the skilled person who made it. We partner with collaborators, not suppliers.
                
                Our products are made from natural, organic and recycled ingredients as we strive to minimise our impact to our planet.
                
                Durability is an important part of sustainability. So we create beautiful, useful products that are designed to be enjoyed for many years – products which gain character and beauty with age – wear-in, not out.   
                
                We believe that as humans; the clothing we wear, how they are made, and the brands we choose to support; are all an expression of our values and identity. Our money is our voting tokens.
                
                We aim to inspire people to support ethical, sustainable and independent brands – buy less,  buy well. </p>
        </div>

            
        <div class="about-socials">
            <h2>Get To Know Us!</h2>
            <div class="about-socials-container">
                <a href=""><img src="Images/instagram.png" alt=""></a><br>
                <a href=""><img src="Images/twitter.png" alt=""></a><br>
                <a href=""><img src="Images/facebook.png" alt=""></a><br>
            </div>
        </div>

    </div>
        


</body>
