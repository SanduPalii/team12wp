<?php 
//for giving title to page
$title="This is title for the page";
$md= "This is meta description for the page";
//including header using this command
include 'connect.php';
include 'header.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $passid =$_POST['passid'];
    $phone = $_POST['phone'];
    $email =  $_POST['email'];
    $id= $_GET['updateid'];

    $sql="UPDATE `Customer` SET ID_customer=$id, F_name='$firstname', L_name='$lastname', Pass_id='$passid',Phone_num='$phone',Email= '$email' where ID_customer=$id"; 
   
    $result = mysqli_query($con,$sql);
    if($result){
        echo "data updated successfully";
       

    }else{
        die(mysqli_error($con));
    }
}
?>
<!-- adding header title -->
<div class="wrapper">
      <div class="container">
        <h1 class="title">Update  Customer</h1>
        <div class="subtitle"></div>
      </div>
    </div>
    </section>

    <div class="container my-5">
<button class="btn btn-primary" >  <a href= "customer_list.php" class= "text-light"> Go back </a>
    
    </button>

     </div>

    <!-- dividing form section with margin 5 -->
    <section class="container my-5">



    <!-- adding form  -->
    <form method = "post">
  <div class="mb-3">
    <label  class="form-label">First name</label>
    <input type="text" class="form-control" placeholder="Enter first name here" name="firstname" >

</div>
<div class="mb-3">
    <label  class="form-label">Last name</label>
    <input type="text" class="form-control" placeholder="Enter last name here" name="lastname">

</div>

<div class="mb-3">
    <label  class="form-label">Pass id</label>
    <input type="text" class="form-control" placeholder="Enter password here" name="passid" >

</div>



<div class="mb-3">
    <label  class="form-label">Phoe number</label>
    <input type="number" class="form-control" placeholder="Enter Contact number here. Eg. 0451231234" name="phone" >

</div>

<div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter email here" name="email" >

</div>



    <!-- submit functionality -->
  <button type="submit" class="btn btn-primary" name = "submit">Update</button>
</form>
</section>
<?php 
include 'footer.php';
?>