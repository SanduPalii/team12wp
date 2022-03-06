<?php 
include '../components/connect.php';
$id=$_GET['updateid'];
$sql="Select * from `Staff` where ID_staff=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$firstname = $row['F_name'];
$lastname = $row['L_name'];
$email = $row['Email'];
$commision = $row['Commision'];

if(isset($_POST['submit'])){
    $firstname = $_POST['F_name'];
    $lastname = $_POST['L_name'];
    $email = $_POST['Email'];
    $commision = $_POST['Commision'];
    $id= $_GET['updateid'];

    $sql="UPDATE `Staff` SET `F_name`='$firstname', `L_name`='$lastname', `Email`='$email', `Commision`='$commision' where `ID_staff`=$id";   
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "data updated successfully";
        header('location:staff_list.php');
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
<!-- adding header title -->
<div class="wrapper">
      <div class="container">
        <h1 class="title">Update  Staff</h1>
        <div class="subtitle"></div>
      </div>
    </div>
    </section>

    <div class="container my-5">
    <button class="btn btn-primary" >  <a href= "staff_list.php" class= "text-light"> Go back </a>
    </button>
    </div>

    <!-- dividing form section with margin 5 -->
    <section class="container my-5">



    <!-- adding form  -->
    <form method = "post">
  <div class="mb-3">
    <label  class="form-label">First name</label>
    <input type="text" class="form-control" name="F_name" value=<?php echo $firstname;?>>

</div>
<div class="mb-3">
    <label  class="form-label">Last name</label>
    <input type="text" class="form-control" name="L_name" value=<?php echo $lastname;?>>

</div>

<div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="text" class="form-control" name="Email" value=<?php echo $email;?>>

</div>
<div class="mb-3">
    <label  class="form-label">Commision</label>
    <input type="number" class="form-control" name="Commision" value=<?php echo $commision;?>>

</div>
    <!-- submit functionality -->
  <button type="submit" class="btn btn-primary" name = "submit">Update staff</button>
</form>
</section>
<?php 
include 'footer.php';
?>