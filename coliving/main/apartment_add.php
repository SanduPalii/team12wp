<?php
include '../components/header.php';
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
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <title>Coliving</title>
  </head>
  <body>
    <div class="container my-5">
    <div class="button_list" style="margin-bottom: 30px;">
    <button class="btn btn-primary" style="background-color: #cc7c19;"> <a href="contract_list.php" class="text-light"> Contracts </a></button>
    <button class="btn btn-primary"> <a href="apartment_admin.php" class="text-light"> Apartments </a></button>
    <button class="btn btn-primary"> <a href="customer_list.php" class="text-light"> Customers </a></button>
    <button class="btn btn-primary"> <a href="staff_list.php" class="text-light"> Staff </a></button>
  </div>
    <form  method="POST">
        <div class="form-group">
            <label class="lab">Price</label>
            <input type="number" name="price" auto complete="off" class="form-control"placeholder="Enter Price in Euro(€)">
        </div>
        <div class="form-group">
            <label class="lab">Available</label>
            <input type="number" name="available" class="form-control"placeholder="Enter 0 for 'No' and 1 for 'Yes'">
        </div>
        <div class="form-group">
            <label class="lab">Wifi</label>
            <input type="number" name="wifi" class="form-control"placeholder="Enter the value of Wifi in MB">
        </div>
        <div class="form-group">
            <label class="lab">Beds</label>
            <input type="number" name="beds" class="form-control"placeholder="Enter the numbers of Beds">
        </div>
        <div class="form-group">
            <label class="lab">Rooms</label>
            <input type="number" name="rooms" class="form-control"placeholder="Enter the numbers of Rooms">
        </div>
        <div class="form-group">
            <label class="lab">Baths</label>
            <input type="number" name="baths" class="form-control"placeholder="Enter the numbers of Baths">
        </div>
        <div class="form-group">
            <label class="lab">Size</label>
            <input type="number" name="size" class="form-control"placeholder="Enter numbers of square kilometers" >
        </div>
        <div class="form-group">
            <button type="submit" class="descr_btn btn_save" name= "submit">save</button>
        </div>
    </form>
    </div>



  </body>
</html>
<?php
include '../components/footer.php'
?>