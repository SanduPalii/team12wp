<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top Top!</button>
    <section class="promo">
        <header>
            <div class="container">
                <div class="row">
                    <div class="logo"><a href="index.html"><img src="img/logo.png" alt="logo"></a></div>
                    <ul class="menu">
                        <li class="menu_link"><a class="menu_link active" href="home.php">Home</a></li>

                        <li class="menu_link"><a href="apartment.php">Apartment</a></li>

                        <li class="menu_link"><a href="about.php">About</a></li>

                        <li class="menu_link"><a href="home.php">News</a></li>

                        <li class="menu_link"><a href="contact.php">Contact</a></li>

                    </ul>
                </div>
            </div>
            <ul class="menu_mini">
                <li class="menu_item"><a href="#" class="menu_link">Home</a></li>
                <li class="menu_item"><a href="#apartment" class="menu_link">Apartment</a></li>
                <li class="menu_item"><a href="about_us.html" class="menu_link">About</a></li>
                <li class="menu_item"><a href="#news" class="menu_link">News</a></li>
                <li class="menu_item"><a href="contact.html" class="menu_link">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>

        <div class="panel">
            <div id="blue" data-color="#b3e5fc" onclick="changeColor('blue')"></div>
            <div id="red" data-color="#ce8f96" onclick="changeColor('red')"></div>
            <div id="purple" data-color="#8e6ad1" onclick="changeColor('purple')"></div>
            <div id="green" data-color="#c5e1a5" onclick="changeColor('green')"></div>
            <div id="orange" data-color="#D9AB74" onclick="changeColor('orange')"></div>
        </div>

        <div class="wrapper">
            <div class="container">
                <h1 class="title">We offer you co-living spaces</h1>
                <div class="subtitle">The amenities you can’t live without at a price you can afford. Where skyline
                    views, modern luxury, and amenities seamlessly merge.</div>
            </div>
        </div>

    </section>