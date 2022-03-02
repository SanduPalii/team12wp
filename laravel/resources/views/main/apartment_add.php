<?php
include '../components/connect.php';
if(isset($_POST['submit'])){
    $price=$_POST['price'];
    $available=$_POST['available'];
    $wifi=$_POST['wifi'];
    $beds=$_POST['beds'];
    $rooms=$_POST['rooms'];
    $baths=$_POST['baths'];
    $size=$_POST['size'];

    $sql="INSERT INTO `apartment`( `price`, `available`, `wifi`, `beds`, `rooms`, `baths`, `size`) 
    VALUES ('$price','$available','$wifi','$beds','$rooms','$baths','$size')";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"Data inserted successfully";
        header('location:apartment_admin.php');


    }else{
        die(mysqli_error($conn));
    }
}
include '../components/header.php';
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
    <form  method="POST">
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" auto complete="off" class="form-control"placeholder="Enter Price in Euro(€)">
        </div>
        <div class="form-group">
            <label>Available</label>
            <input type="number" name="available" class="form-control"placeholder="Enter 0 for 'No' and 1 for 'Yes'">
        </div>
        <div class="form-group">
            <label>Wifi</label>
            <input type="number" name="wifi" class="form-control"placeholder="Enter the value of Wifi in MB">
        </div>
        <div class="form-group">
            <label>Beds</label>
            <input type="number" name="beds" class="form-control"placeholder="Enter the numbers of Beds">
        </div>
        <div class="form-group">
            <label>Rooms</label>
            <input type="number" name="rooms" class="form-control"placeholder="Enter the numbers of Rooms">
        </div>
        <div class="form-group">
            <label>Baths</label>
            <input type="number" name="baths" class="form-control"placeholder="Enter the numbers of Baths">
        </div>
        <div class="form-group">
            <label>Size</label>
            <input type="number" name="size" class="form-control"placeholder="Enter numbers of square kilometers" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name= "submit">save</button>
        </div>
    </form>
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