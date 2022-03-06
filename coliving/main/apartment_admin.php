<?php
session_start();


if(isset($_SESSION["username"]))
{
	header("location:login.php");
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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container">
<button class="add btn"><a href="apartment_add.php">Add apartment</a></button>  
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
          <td scope="row"><a href="apartment_list.php?updateid='.$id.'"class="text-light">'.$id.'</a></td>
          <td>'.$price.'</td>
          <td>'.$available.'</td>
          <td>'.$wifi.'</td>
          <td>'.$beds.'</td>
          <td>'.$rooms.'</td>
          <td>'.$baths.'</td>
          <td>'.$size.'</td>
          <td>
          <button class="btn_op up"><a href="../components/update.php?updateid='.$id.'"class="text-light">Update</a></button>
          <button class="btn_op del"><a href="../components/delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
        </td>
        </tr>';

        }
      }

    ?>
  </tbody>
</table>

<button class="logout btn"><a href="../components/logout.php">Logout</a></button>
</div>

</body>
</html>
<?php include '../components/afterlogin_footer.php'; ?>

