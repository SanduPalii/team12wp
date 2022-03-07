<?php
include '../components/connect.php';
$id=$_GET['updateid'];
$sql="Select * from  `Contract` where ID_contract=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$idcustomer=$row['ID_customer'];
$datestart=$row['Date_start'];
$dateend=$row['Date_end'];
$price=$row['Price'];
$idstaff=$row['ID_staff'];
$idapartment=$row['ID_apartment'];



if(isset($_POST['submit'])){    
    $idcustomer = $_POST['ID_customer'];
    $datestart = $_POST['Date_start'];
    $dateend = $_POST['Date_end'];
    $price = $_POST['Price'];
    $idstaff = $_POST['ID_staff'];
    $idapartment = $_POST['ID_apartment'];
    $id= $_GET['updateid'];

    $sql="UPDATE `Contract` SET `ID_contract` = $id,
    `ID_customer`='$idcustomer',
    `Date_start`='$datestart',`Date_end`='$dateend',`Price`='$price',`ID_staff`='$idstaff',
    `ID_apartment`='$idapartment' WHERE `ID_contract`=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"updated successfully";
        header('location:contract_list.php');
    }else{
        echo 'ERROR!';
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
    <h1 class="title">Contract update</h1>
    <form  method="POST">
        <div class="form-group">
            <label>Customer</label>
                <?php $sql = "SELECT  * FROM Customer";
                    $result = mysqli_query($conn, $sql);
                    echo "<select class='form-control' name='ID_customer'><option>Customer</option>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['F_name'] . "'>" . $row['F_name'] . "</option>";
                    }
                    echo "</select>";
                ?>
        </div>
        <div class="form-group">
            <label class="form-label ">Date start</label>
            <input class="form-control" type="date" name="Date_start" value="2022-03-08">
        </div>
        <div class="form-group">
            <label class="form-label">Date end</label>
            <input class="form-control" type="date" name="Date_end" value="2022-03-08">
        </div>
        <div class="form-group">
            <label class="form-label">Price € </label>
            <input class="form-control" type="text" class="form-control" placeholder="Enter price in € here. without €" name="Price">
        </div>
        <div class="form-group">
        <label class="form-label">Staff</label>
            <?php $sql = "SELECT  * FROM Staff";
            $result = mysqli_query($conn, $sql);

            echo "<select class='form-control' name='ID_staff'><option>Staff</option>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['F_name'] . "'>" . $row['F_name'] . "</option>";
            }
            echo "</select>";?>
        </div>
        <div class="form-group">
            <label class="form-label">Apartment</label>
            <?php $sql = "SELECT  * FROM apartment";
            $result = mysqli_query($conn, $sql);

            echo "<select class='form-control' name='ID_apartment'><option>Apartment</option>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['apartment_id'] . "'>" . $row['apartment_id'] . "</option>";
            }
            echo "</select>";?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name= "submit">Update</button>
        </div>
    </form>
    </div>



  </body>
</html>