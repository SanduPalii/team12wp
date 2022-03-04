<?php
session_start();

if(!isset($_SESSION["username"]))
{
	header("Location:login.php");
  exit;
}


?>

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
<button class="btn btn-primary my-5"><a href="apartment_add.php"class="text-light">Add apartment</a>

</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">apartment_id</th>
      <th scope="col">Price</th>
      <th scope="col">Available</th>
      <th scope="col">Wifi</th>
      <th scope="col">Beds</th>
      <th scope="col">Rooms</th>
      <th scope="col">Baths</th>
      <th scope="col">Size</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql="Select * from `apartment`";
      $result=mysqli_query($conn,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['apartment_id'];
          $price=$row['price'];
          $available=$row['available'];
          $wifi=$row['wifi'];
          $beds=$row['beds'];
          $rooms=$row['rooms'];
          $baths=$row['baths'];
          $size=$row['size'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$price.'</td>
          <td>'.$available.'</td>
          <td>'.$wifi.'</td>
          <td>'.$beds.'</td>
          <td>'.$rooms.'</td>
          <td>'.$baths.'</td>
          <td>'.$size.'</td>
          <td>
          <button class="btn btn-primary"><a href="apartment_update.php?updateid='.$id.'"class="text-light">Update</a></button>
          <button class="btn btn-danger"><a href="../components/delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
        </td>
        </tr>';

        }
      }
      
    ?>
  </tbody>
</table>

<button class="btn btn-danger my-5"style="height:70px;margin:0px;padding:2px;"><a href="../components/logout.php"class="text-light"><br>Logout</a></button>
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
