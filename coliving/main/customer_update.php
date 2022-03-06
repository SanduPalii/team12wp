
<?php 
include '../components/connect.php';
$id=$_GET['updateid'];
$sql="Select * from  `Customer` where ID_customer=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$firstname = $row['F_name'];
$lastname = $row['L_name'];
$passid = $row['Pass_id'];
$phone = $row['Phone_num'];
$email = $row['Email'];

if(isset($_POST['submit'])){
    $firstname = $_POST['F_name'];
    $lastname = $_POST['L_name'];
    $passid = $_POST['Pass_id'];
    $phone = $_POST['Phone_num'];
    $email = $_POST['Email'];
    $id= $_GET['updateid'];

    $sql="UPDATE `Customer` SET `ID_customer`=$id, `F_name`='$firstname', `L_name`='$lastname', `Pass_id`='$passid', `Phone_num`='$phone', `Email`= '$email' where `ID_customer`=$id"; 
   
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "data updated successfully";
        header('location:customer_list.php');
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
    <h1 class="title">Customer update</h1>
    <form  method="POST">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="F_name" class="form-control" value=<?php echo $firstname;?>>
        </div>
        <div class="form-group">
            <label>Last name</label>
            <input type="text" name="L_name" class="form-control" value=<?php echo $lastname;?>>
        </div>
        <div class="form-group">
            <label>Passport ID</label>
            <input type="text" name="Pass_id" class="form-control" value=<?php echo $passid;?>>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="Phone_num" class="form-control" value=<?php echo $phone;?>>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="Email" class="form-control" value=<?php echo $email;?>>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name= "submit">Update customer</button>
        </div>
    </form>
    </div>
  </body>
</html>
