
<?php
    
  include '../components/connect.php';
  include '../components/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coliving</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">apartment_id</th>
      <th scope="col">Price(€)</th>
      
      <th scope="col">Wifi</th>
      <th scope="col">Beds</th>
      <th scope="col">Rooms</th>
      <th scope="col">Baths</th>
      <th scope="col">Size</th>
    </tr>
  </thead>
  <tbody>


  <?php
$sql="Select * from `apartment`where available=true;";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['apartment_id'];
    $price=$row['price'];
    
    $wifi=$row['wifi'];
    $beds=$row['beds'];
    $rooms=$row['rooms'];
    $baths=$row['baths'];
    $size=$row['size'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$price.'</td>
   
    <td>'.$wifi.'</td>
    <td>'.$beds.'</td>
    <td>'.$rooms.'</td>
    <td>'.$baths.'</td>
    <td>'.$size.'</td>
    <td>
    

  </td>
  </tr>';

  }
}

?>


  </tbody>
</table>
</div>
  
  
   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="/laravel/resources/css/style.css">
    <link rel="stylesheet" href="/laravel/resources/css/media.css">
</head>
<body>


<?php include '../components/footer.php'; ?>