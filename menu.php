<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Cafeti&#232;re Menu</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="img/logo2.png" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php" href="#" herf"#home">home</a>
        <a href="about.php" href="#" href="#about">about</a>
        <a href="menu.php" href="#" href="#menu">menu</a>
        <a href="contact.php" href="#" href="#contact">contact</a>
        <a href="login.php" class="contact">Log in</a>
        <a href="register.php" class="contact">Sign in</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>


    
</header>

<!-- menu section starts  -->
<div class=”Cart-Items”>
<section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="img/menu-1.png" alt="">
            <h3>BLACK COFFEE</h3>
            
             <div class="price">Php100 <span>200</span></div>
            <a href="login.php" class="btn" onclick="addToCart (item)">add to cart</a>
        </div>
        <div class="box">
            <img src="img/menu-2.png" alt="">
            <h3>ESPRESSO</h3>
            <div class="price">Php100 <span>200</span></div>
        
           <a href="login.php" class="btn" onclick="addToCart (item)">add to cart</a>
</div>

        <div class="box">
            <img src="img/menu-3.png" alt="">
            <h3>DOPPIO</h3>
            <div class="price">Php150 <span>200</span></div>
            <a href="login.php" class="btn" onclick="addToCart (item)">add to cart</a>
        </div>

        <div class="box">
            <img src="img/menu-4.png" alt="">
            <h3>RESTRETTO</h3>
            <div class="price">Php300 <span>200</span></div>
            <a href="login.php" class="btn" onclick="addToCart (item)">add to cart</a>
        </div>

        <div class="box">
            <img src="img/menu-5.png" alt="">
            <h3>LUNGO</h3>
            <div class="price">Php150 <span>180</span></div>
           <a href="login.php" class="btn" onclick="addToCart (item)">add to cart</a>
        </div>

        <div class="box">
            <img src="img/menu-6.png" alt="">
            <h3>LATTE</h3>
            <div class="price">Php199 <span>200</span></div>
            <a href="login.php" class="btn" onclick="addToCart (item)">add to cart</a>
        </div>

        <div class="box">
            <img src="img/menu-6.png" alt="">
            <h3>MACCHIATO</h3>
            <div class="price">Php199 <span>200</span></div>
            <a href="login.php" class="btn" onclick="addToCart (item)">add to cart</a>
        </div>

        <div class="box">
            <img src="img/menu-6.png" alt="">
            <h3>CAPPUCCINO</h3>
            <div class="price">Php199 <span>200</span></div>
            <a href="login.php" class="btn" onclick="addToCart (item)">add to cart</a>
        </div>

        <div class="box">
            <img src="img/menu-6.png" alt="">
            <h3>FLAT WHITE</h3>
            <div class="price">Php199 <span>200</span></div>
            <a href="login.php" class="btn" onclick="addToCart (item)">add to cart</a>
        </div>


    </div>


</section>

<script src="js/script.js"></script>

</body>
</html>