<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../slick/slick.css">
    <link rel="stylesheet" href="../slick/slick-theme.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css">
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top Top!</button>
<section class="promo">
<?php include '../components/header.php'; ?>
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
<div class="zoom">
    <img id="src_image" alt="catalog" onclick="zoomOff()">
</div>
<section class="apartment" id="apartment">
    <div class="container">
        <h2 class="apartment_title">Apartments in Hämeenlinna</h2>

        <div class="catalog">
            <div class="catalog_wrapper">
                <div class="catalog_image">
                    <img src="../image/catalog.png" alt="catalog" onclick="zoomOn('../img/catalog.png')">
                </div>
                <div class="catalog_info">
                    <ul class="catalog_menu">
                        <li class="catalog_link">Beds <br><span>4</span></li>
                        <li class="catalog_link">Baths <br><span>2</span></li>
                        <li class="catalog_link">Type <br><span>alartment</span></li>
                        <li class="catalog_link">Size(m<sup>2</sup>) <br><span>2</span></li>
                        <li class="catalog_link">Min.stay <br> <span>1 months</span></li>
                        <li class="catalog_link">Wifi <br> <span>300Mb</span></li>
                        <li class="catalog_link">Price <br><span>20$/m</span></li>
                    </ul>
                </div>
            </div>
            <div class="catalog_descr">
                <div class="descr_title">Fully Renovated Modern Unit</div>
                <div class="descr_text">
                    <p>Our members are curious and open to people and ideas around them. Never miss an opportunity
                        to connect with interesting people. They cultivate collaboration and exchange amongst
                        members and the extended community. </p>
                    <br>
                    <p>They think green and enable sustainable lifestyles through sharing and efficient use of
                        resources and space. They stay foolish, inspiring, and empower fellow members to be active
                        creators in the world around them.</p>
                    <br>
                    <p>From the first house until now it has been a journey full of little improvement to rethink
                        the way people are living together.</p>
                </div>
                <button class="descr_btn">
                    <a href="apartment_list.php">Check availability</a>                 
                </button>
            </div>
        </div>
        <div class="catalog" id="catalog">
            <div class="catalog_wrapper">
                <div class="catalog_image">
                    <img src="../image/catalog2.jpg" class="catalog2" alt="catalog" onclick="zoomOn('../image/catalog2.jpg')">
                </div>
                <div class="catalog_info">
                    <ul class="catalog_menu">
                        <li class="catalog_link">Beds <br><span>4</span></li>
                        <li class="catalog_link">Baths <br><span>2</span></li>
                        <li class="catalog_link">Type <br><span>alartment</span></li>
                        <li class="catalog_link">Size(m<sup>2</sup>) <br><span>2</span></li>
                        <li class="catalog_link">Min.stay <br> <span>1 months</span></li>
                        <li class="catalog_link">Wifi <br> <span>300Mb</span></li>
                        <li class="catalog_link">Price <br><span>20$/m</span></li>
                    </ul>
                </div>
            </div>
            <div class="catalog_descr">
                <div class="descr_title">Apartment Visämaki </div>
                <div class="descr_text">
                    <p>This apartment are designed for the customers who want to visit the place with pets.</p>
                    <br>
                    <p>There are many facilities like big and spacious rooms, free parking, washing machines and
                        dryers as well as laundry services. </p>
                    <br>
                    <p> We have our own gym for the customers as well as swimming area near the apartment in a
                        beautiful lake. </p> <br><br>
                    <p>
                        Welcome!
                    </p>
                </div>
                <button class="descr_btn">
                    <a href="apartment_list.php">Check availability</a>
                </button>
            </div>
        </div>
        <div class="catalog">
            <div class="catalog_wrapper">
                <div class="catalog_image">
                    <img src="../image/catalog3.jpg" alt="catalog" onclick="zoomOn('../image/catalog3.jpg')">
                </div>
                <div class="catalog_info">
                    <ul class="catalog_menu">
                        <li class="catalog_link">Beds <br><span>4</span></li>
                        <li class="catalog_link">Baths <br><span>2</span></li>
                        <li class="catalog_link">Type <br><span>alartment</span></li>
                        <li class="catalog_link">Size(m<sup>2</sup>) <br><span>2</span></li>
                        <li class="catalog_link">Min.stay <br> <span>1 months</span></li>
                        <li class="catalog_link">Wifi <br> <span>300Mb</span></li>
                        <li class="catalog_link">Price <br><span>20$/m</span></li>
                    </ul>
                </div>
            </div>
            <div class="catalog_descr">
                <div class="descr_title">Apartment Aulanko</div>
                <div class="descr_text">
                    <p>Apartment Aulanko are located in the height of hämeenlinna city. There is a nice view of the
                        city hämeenlinna from our apartments. In this apartments basically you can enjoy with
                        nature.
                    </p>
                    <br>
                    <p>
                        We have all the services in our apartment. There is a lot to see in Aulanko Nature Reserve,
                        in addition to the beautiful scenery.</p>
                    <br>
                    <p>The forest park of Aulanko, its sights, and the view from the scenic lookout tower of
                        Aulangonvuori Hill over the national landscape attract more visitors every year. The area is
                        best suitable for day trips. Welcome! </p>
                </div>
                <button class="descr_btn">
                    <a href="apartment_list.php">Check availability</a>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="about_wrapper">
            <div class="about_title">
                ABOUT us
            </div>
            <div class="about_subtitle">
                We are the rental company which we shares our apartments for clients in an affordable prices. We
                have modern apartments with different kinds of facilities in Hämeenlinna. You will experience the
                Finnish nature , Sauna, and Finnish lifestyle during the stay in our apartment.
            </div>
        </div>
    </div>
</section>

<section class="news" id="news">
    <div class="container">
        <div class="news_title">
            NEWS
        </div>
        <div class="news_card">
            <div class="card">
                <div class="card_title">Privacy policy 2022</div>
                <div class="card_date">05.01.2022</div>
                <div class="card_text">
                    We have all the services in our apartment. There is a lot to see in Aulanko Nature Reserve, in
                    addition to the beautiful scenery.
                    <br><br>
                    Maecenas ac porttitor lectus, et consequat orci. Praesent non laoreet odio.
                </div>
                <div class="card_btn descr_btn">Read more</div>
            </div>
            <div class="card">
                <div class="card_title">Privacy policy 2022</div>
                <div class="card_date">05.01.2022</div>
                <div class="card_text">
                    We have all the services in our apartment. There is a lot to see in Aulanko Nature Reserve, in
                    addition to the beautiful scenery.
                    <br><br>
                    Maecenas ac porttitor lectus, et consequat orci. Praesent non laoreet odio.
                </div>
                <div class="card_btn descr_btn">Read more</div>
            </div>
            <div class="card">
                <div class="card_title">Privacy policy 2022</div>
                <div class="card_date">05.01.2022</div>
                <div class="card_text">
                    We have all the services in our apartment. There is a lot to see in Aulanko Nature Reserve, in
                    addition to the beautiful scenery.
                    <br><br>
                    Maecenas ac porttitor lectus, et consequat orci. Praesent non laoreet odio.
                </div>
                <div class="card_btn descr_btn">Read more</div>

            </div>
        </div>
    </div>
</section>

<?php include '../components/footer.php'; ?>