<?php
include '../components/connect.php';
$id=$_GET['updateid'];
$sql="Select * from  `apartment` where apartment_id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$price=$row['price'];
$available=$row['available'];
$wifi=$row['wifi'];
$beds=$row['beds'];
$rooms=$row['rooms'];
$baths=$row['baths'];
$size=$row['size'];


if(isset($_POST['submit'])){
    $price=$_POST['price'];
    $available=$_POST['available'];
    $wifi=$_POST['wifi'];
    $beds=$_POST['beds'];
    $rooms=$_POST['rooms'];
    $baths=$_POST['baths'];
    $size=$_POST['size'];

    $sql="UPDATE `apartment` SET `apartment_id`='$id',`price`='$price',
    `available`='$available',`wifi`='$wifi',`beds`='$beds',`rooms`='$rooms',
    `baths`='$baths',`size`='$size' WHERE apartment_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"updated successfully";
        header('location:apartment_admin.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Coliving</title>
  </head>
  <body>
    <div class="container my-5">
    <h1 class="title">Apartment update</h1>
    <form  method="POST"> 
        <div class="form-group"> 
            <label>Price</label> 
            <input type="number" name="price" min="500" max="1500" auto complete="off" class="form-control"placeholder="Enter Price in Euro(€)"> 
        </div> 
        <div class="form-group"> 
            <label>Available</label> 
            <input type="number" name="available" min="0" max="1" class="form-control"placeholder="Enter 0 for 'No' and 1 for 'Yes'"> 
        </div> 
        <div class="form-group"> 
            <label>Wifi</label> 
            <input type="number" name="wifi" min="50" max="300" class="form-control"placeholder="Enter the value of Wifi in MB"> 
        </div> 
        <div class="form-group"> 
            <label>Beds</label> 
            <input type="number" name="beds" min="1" max="20" class="form-control"placeholder="Enter the numbers of Beds"> 
        </div> 
        <div class="form-group"> 
            <label>Rooms</label> 
            <input type="number" name="rooms" min="1" max="10" class="form-control"placeholder="Enter the numbers of Rooms"> 
        </div> 
        <div class="form-group"> 
            <label>Baths</label> 
            <input type="number" name="baths" min="1" max="5" class="form-control"placeholder="Enter the numbers of Baths"> 
        </div> 
        <div class="form-group"> 
            <label>Size</label> 
            <input type="number" name="size" min="20" max="500" class="form-control"placeholder="Enter numbers of square kilometers" > 
        </div> 
        <div class="form-group"> 
            <button type="submit" class="btn btn-primary" name= "submit">save</button> 
        </div> 
    </form>
    </div>



  </body>
</html>