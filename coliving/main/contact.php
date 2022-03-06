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
    <?php include '../components/connect.php';  ?>
</head>

<body>
    
    <section class="contact">
        <?php include '../components/header.php'; ?>
        <div class="wrapper_contact">
            <div class="container">
                <h1 class="contact_title">Contact us</h1>
            </div>
        </div>
    </section>

    <section class="contact_info">
        <div class="container">
            <h2 class="contact_subtitle">
                Lets start a Conversation
            </h2>
            <div class="contact_wrapper">
                <div class="contact_data">
                    <ul class="contact_list">
                        <li>Opening hours: 9:00-18:00</li>
                        <li>hey@coliving.fi</li>
                        <li>+358 45 223-43-12</li>
                        <li>Hämeenlinna 23A, Finland</li>
                    </ul>
                    <div class="maps">
                        <iframe class="maps_info" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989275.8655599053!2d23.391831867558906!3d61.03484997585861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468e5c42a583f8cb%3A0x400b551554bad30!2sH%C3%A4meenlinna%2C%20Finland!5e0!3m2!1sen!2snl!4v1646576100372!5m2!1sen!2snl" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="container my-5">
                    <div class="form-group">

                    </div>
                    <form name="addcustomer" method="post" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label class="lab">Name</label>
                            <input type="text" name="Name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label class="lab">Email</label>
                            <input type="text" name="Email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="lab">Country</label>
                            <input type="text" name="Country" class="form-control" placeholder="Enter your country name">
                        </div>
                        <div class="form-group">
                            <label class="lab">Message</label>
                            <input type="text" name="Message" class="form-control" placeholder="Enter your message">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="descr_btn btn_save" name="submit"><a href="#popup1">Send message</a> </button>
                        </div>
                        
                        <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $country = $_POST['Country'];
        $message = $_POST['Message'];
        $sql = "INSERT INTO `Contact`(`Name`,`Email`,`Country`,`Message`)
    values ('$name','$email','$country','$message')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div id="popup1" class="overlay">

            <div class="popup">
                <h2>Thank you for your message!</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    We will contact you as soon as possible!
                </div>
            </div>
        </div>';
            
        } else {
            die(mysqli_error($conn));
        }
    }
    ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include '../components/footer.php'; ?>