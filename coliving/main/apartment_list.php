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
    <div class="wrapper_contact">
        <div class="container">
            <h1 class="contact_title">Apartments</h1>
        </div>
    </div>

</section>
<body>
  <div class="container">
    <table class="table">
        <tr class="table_menu">
          <th scope="col">apartment_id</th>
          <th scope="col">Price(€)</th>

          <th scope="col">Wifi</th>
          <th scope="col">Beds</th>
          <th scope="col">Rooms</th>
          <th scope="col">Baths</th>
          <th scope="col">Size</th>
        </tr>
        
        <?php
        include '../components/connect.php';
        $sql = "Select * from `apartment` where available=true";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['apartment_id'];
            $price = $row['price'];

            $wifi = $row['wifi'];
            $beds = $row['beds'];
            $rooms = $row['rooms'];
            $baths = $row['baths'];
            $size = $row['size'];
            echo '<tr>
    <td scope="row">' . $id . '</td>
    <td>' . $price . '</td>
   
    <td>' . $wifi . '</td>
    <td>' . $beds . '</td>
    <td>' . $rooms . '</td>
    <td>' . $baths . '</td>
    <td>' . $size . '</td>
  </tr>';
          }
        }

        ?>
    </table>
      </div>
</body>

<?php
include '../components/footer.php'
?>