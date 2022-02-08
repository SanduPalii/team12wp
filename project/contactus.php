<?php
$title="about us";
$md= "This is meta description is about us";
include 'header.php';?>

<div class="wrapper">
      <div class="container">
        <h1 class="title">CONTACT US</h1>
        <div class="subtitle"></div>
      </div>
    </div>
  </section>
  <section class="apartment">
    <div class="container">
      <h2 class="apartment_title">LETS STARTS A CONVERSATION</h2>
    <div class="catalog">
      <div class="catalog_wrapper">
        <div class="catalog_img">
          <p><img src="clock.jpg" width="35" >  Opening Time: 06:00-18:00</p>
          <p><img src="email.png" width="35" >  Email: hey@yahooo.com</p>
          <p><img src="phone.png" width="35" >  Phone: +358-451782800</p>
          <p><img src="map.jpg" width="35">   Address: Hämeenlinna 23, Finland</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1978261.9342150355!2d24.512686!3d61.03949500000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468e5c42a583f8cb%3A0x400b551554bad30!2sH%C3%A4meenlinna!5e0!3m2!1sen!2sfi!4v1643294848772!5m2!1sen!2sfi" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    <div class="catalog">
      <div class="catalog_wrapper">
      </div>
      <div class="catalog_descr">
        <div class="descr_title"><h3></h3></div>
        <div class="descr_text">
          <form action="/action_page.php">
            <p> <input type="text" id="fname" name="fname" value="Name"></p>
             <p><input type="email" id="fname" name="fname" value="Email"></p>
             <p><input type="text" id="fname" name="fname" value="Country"></p>
             <p><textarea rows="16" cols="40" name="comment" form="usrform">Message</textarea> </p>
             <p>Please note:all fields are required to fill.</p>
           </form>
        </div>
        <div class="descr_btn"><a href="#">SEND MESSAGE</a></div>
        <p></p>
      </div>
    </div>
    </div>
    </div>



<?php
include 'footer.php';?>