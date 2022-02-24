<?php
$title="This is title for the page";
$md= "This is meta description for the page";
include 'header.php';?>

<div class="zoom">
        <img src="img/catalog.png" id="src_image" alt="catalog" onclick="zoomOff()">
    </div>
    <section class="apartment" id="apartment">
        <div class="container">
            <h2 class="apartment_title">Apartments in Hämeenlinna</h2>

            <div class="catalog">
                <div class="catalog_wrapper">
                    <div class="catalog_image">
                        <img src="img/catalog.png" alt="catalog" onclick="zoomOn('img/catalog.png')">
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
                    <div class="descr_btn">
                        Check availability
                    </div>
                </div>
            </div>
            <div class="catalog" id="catalog">
                <div class="catalog_wrapper">
                    <div class="catalog_image">
                        <img src="img/catalog2.jpg" class="catalog2" alt="catalog" onclick="zoomOn('img/catalog2.jpg')">
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
                    <div class="descr_btn">
                        Check availability
                    </div>
                </div>
            </div>
            <div class="catalog">
                <div class="catalog_wrapper">
                    <div class="catalog_image">
                        <img src="img/catalog3.jpg" alt="catalog" onclick="zoomOn('img/catalog3.jpg')">
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
                    <div class="descr_btn">
                        Check availability
                    </div>
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



<?php
include 'footer.php';?>