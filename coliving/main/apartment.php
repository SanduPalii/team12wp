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
<section class="contact">
    <?php include '../components/header.php'; ?>
    <div class="wrapper">
        <div class="container">
            <h1 class="title">We offer you co-living spaces</h1>
            <div class="subtitle">The amenities you can’t live without at a price you can afford. Where skyline views,
                modern luxury, and amenities seamlessly merge.</div>
        </div>
    </div>
</section>


<section class="apartment">
    <div class="container">
        <h2 class="apartment_title">FILL THE FORM BELOW TO APPLY FOR APARTMENT</h2>
        <div class="catalog">
            <div class="catalog_wrapper">
                <div class="catalog_img">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        Name: <input type="text" name="name">
                        <br><br>
                        E-mail: <input type="text" name="email">
                        <br><br>
                        Adress: <input type="text" name="adress">
                        <br><br>
                        Gender:
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="other">Other
                        <br><br>
                        Area required in square meter : <input type="number" name="areareq">
                        <br><br>
                        Maximum Rent: <input type="number" name="maxrent">
                        Please note: amount should be between 500-1500 euros .
                        <br><br>
                        Building type:
                        <br><br>
                        <input type="checkbox" id="block" name="block" value="block of flats">
                        <label for="block"> Block of flats</label><br>
                        <input type="checkbox" id="terraced" name="terraced" value="terraced flats">
                        <label for="terraced"> Terraced Flats</label><br>
                        <input type="checkbox" id="independent" name="independent" value="independent">
                        <label for="Independent"> Independent flats</label><br><br>


                        <br><br>

                </div>
            </div>
            <div class="catalog">
                <div class="catalog_wrapper">
                </div>
                <div class="catalog_descr">
                    <div class="descr_title">
                        <h3></h3>
                    </div>
                    <div class="descr_text">
                        Number of rooms:
                        <br><br>
                        <input type="checkbox" id="1" name="1" value="1">
                        <label for="1"> 1H</label><br>
                        <input type="checkbox" id="2" name="2" value="2">
                        <label for="2"> 2H</label><br>
                        <input type="checkbox" id="3" name="3" value="3h">
                        <label for="3"> 3H</label><br><br>

                        Additional requests :
                        <br><br>
                        <input type="checkbox" id="Lift" name="Lift" value="Lift">
                        <label for="Lift"> Lift</label><br>
                        <input type="checkbox" id="Balcony" name="Balcony" value="Balcony">
                        <label for="Balcony"> Balcony</label><br>
                        <input type="checkbox" id="Sauna" name="Sauna" value="Sauna">
                        <label for="Sauna"> Sauna </label><br><br>

                        Number of adults : <input type="number" name="adults">
                        <br><br>

                        Number of kids : <input type="number" name="kids">
                        <br><br>




                        <p>Please note:all fields are required to fill.</p>
                        <br><br>

                        <input type="submit" name="Send Application" value="Submit">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include '../components/footer.php'; ?>