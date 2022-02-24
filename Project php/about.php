<?php
$title="This is title for the page";
$md= "This is meta description for the page";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
    <section class="contact">
        <header>
            <div class="container">
                <div class="row">
                    <div class="logo"><a href="index.html"><img src="img/logo.png" alt="logo"></a></div>
                    <ul class="menu">
                        <a href="home.php"><li class="menu_link">Home</li></a>
                        
                        <a href="apartment.php"><li class="menu_link">Apartment</li></a>
                        
                        <a href="about.php"><li class="menu_link active">About</li></a>
                        
                        <a href="#"><li class="menu_link">News</li></a>
                        
                        <a href="contact.php"><li class="menu_link">Contact</li></a>
    
                    </ul>
                </div>
            </div>

            <ul class="menu_mini">
                <li class="menu_item"><a href="index.html" class="menu_link">Home</a></li>
                <li class="menu_item"><a href="index.html" class="menu_link">Apartment</a></li>
                <li class="menu_item"><a href="about_us.html" class="menu_link">About</a></li>
                <li class="menu_item"><a href="index.html" class="menu_link">News</a></li>
                <li class="menu_item"><a href="contact.html" class="menu_link">Contact</a></li>
            </ul>
    
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>
        </header>

        <div class="panel">
            <div id="blue" data-color="#b3e5fc" onclick="changeColor('blue')"></div>
            <div id="red" data-color="#ce8f96" onclick="changeColor('red')"></div>
            <div id="purple" data-color="#8e6ad1" onclick="changeColor('purple')"></div>
            <div id="green" data-color="#c5e1a5" onclick="changeColor('green')"></div>
            <div id="orange" data-color="#D9AB74" onclick="changeColor('orange')"></div>
        </div>
        
        <div class="wrapper_contact">
            <div class="container">
                <h1 class="contact_title">About us</h1>
            </div>
        </div>
        
    </section>
    <div class="zoom">
        <img src="img/about_img1.png" id="src_image" alt="catalog" onclick="zoomOff()">
    </div>
    <section class="about_info">
        <div class="container">
            <div class="info_wrapper">
                <div class="info__data">
                    <div class="data_title">What is coliving?</div>
                    <div class="data_text">
                        <p>Coliving is a modern form of shared housing.
                            It’s a way to live and share a home with other like-minded people. The biggest value of coliving is access to the community. </p>
                        <br>
                        <p>Fully furnished, specially-designed living spaces create an inspiring environment for people to interact and share experiences.</p>
                        <br>
                        <p>Coliving.fi has the biggest selection of coliving spaces in the world.</p>
                        <br>
                        <p>Residents unite around a common interest of wanting to learn and grow from the people they surround themselves with. They also value the positive environmental impact of sharing resources and costs to reduce waste.</p>
                        </div>
                </div>
                <div class="catalog_image info_cat">
                    <img src="img/about_img1.png" alt="catalog" onclick="zoomOn('img/about_img1.png')">
                </div>
            </div>
            <div class="info_wrapper">
                <div class="info__data">
                    <div class="data_title">Who is coliving for?</div>
                    <div class="data_text">
                        <p>Coliving is for people who value a community alongside individuality.</p>
                        <br>
                        <p>Residents unite around a common interest of wanting to learn and grow from the people they surround themselves with. They also value the positive environmental impact of sharing resources and costs to reduce waste.</p>
                        <br>
                        <p>Coliving is perfect for those relocating for a new job, studying for a degree, working remotely, starting a new company, or getting to know a new city.</p>
                        <br>
                        <p>Young professionals, entrepreneurs, artists, interns, students, travelers, remote workers and many more benefit from a flexible and furnished lifestyle ripe with advantages for themselves, their community and the planet.</p>
                        </div>
                </div>
                <div class="catalog_image info_cat">
                    <img src="img/about_img2.png" alt="catalog" onclick="zoomOn('img/about_img2.png')">
                </div>
            </div>
        </div>
    </section>

    <section class="story">
        <div class="container">
            <div class="story_wrapper">
                <div class="story_title">Our Story</div>
                <div class="story_text">The idea of building the largest platform of coliving homes began in a Menlo Park startup house in the winter of 2014. Our founder Daniel Beck was visiting Silicon Valley for the first time and more than the Golden Gate bridge or the Apple campus, what marked him were the countless driven and optimistic people he met while staying there. As exciting as it is, working remotely while traveling or moving to a new city for a fresh start can also be lonely and disheartening. At Coliving.com it is our goal to connect the new generation of workers to the communities made for them.
                </div>
            </div>
        </div>
    </section>



<?php
include 'footer.php';?>