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
    $password =$_POST['password'];
    $contract = $_POST['contract'];
    $date = $_POST['date'];
    $phonenumber = $_POST['phone'];
    $email =  $_POST['email'];

    $sql="insert into 'customer'(f_name,l_name,password,contract_rent,date_end,phone_number,email)
    values ('$firstname','$lastname','$password','$contract','$date','$phonenumber','$email')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully";

    }else{
        die(mysqli_error($con));
    }
}
?>
<!-- adding header title -->
<div class="wrapper">
      <div class="container">
        <h1 class="title">Add Customer</h1>
        <div class="subtitle"></div>
      </div>
    </div>
    </section>

    <div class="container my-5">
<button class="btn btn-primary" >  <a href= "display.php" class= "text-light"> Go back </a>
    
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
    <label  class="form-label">Password</label>
    <input type="text" class="form-control" placeholder="Enter password here" name="password" >

</div>

<div class="mb-3">
    <label  class="form-label">Contract rent</label>
    <input type="text" class="form-control" placeholder="Enter Contract rent here" name="contract" >

</div>

<div class="mb-3">
    <label  class="form-label">Date</label>
    <input type="date" class="form-control"  value="2018-07-22" name="date">

</div>

<div class="mb-3">
    <label  class="form-label">Phoe number</label>
    <input type="text" class="form-control" placeholder="Enter Contact number here. Eg. 0451231234" name="phone" >

</div>

<div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter email here" name="email" >

</div>



    <!-- submit functionality -->
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>
</section>
<?php 
include 'footer.php';
?>