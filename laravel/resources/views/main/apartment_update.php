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
            <input type="number" name="price" auto complete="off" class="form-control"value=<?php echo $price;?>>
        </div>
        <div class="form-group">
            <label>Available</label>
            <input type="number" name="available" class="form-control"value=<?php echo $available;?>>
        </div>
        <div class="form-group">
            <label>Wifi</label>
            <input type="number" name="wifi" class="form-control"value=<?php echo $wifi;?>>
        </div>
        <div class="form-group">
            <label>Beds</label>
            <input type="number" name="beds" class="form-control"value=<?php echo $beds;?>>
        </div>
        <div class="form-group">
            <label>Rooms</label>
            <input type="number" name="rooms" class="form-control"value=<?php echo $rooms;?>>
        </div>
        <div class="form-group">
            <label>Baths</label>
            <input type="number" name="baths" class="form-control"value=<?php echo $baths;?>>
        </div>
        <div class="form-group">
            <label>Size</label>
            <input type="number" name="size" class="form-control"value=<?php echo $size;?>>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" name= "submit">Update</button>
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
