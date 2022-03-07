<link rel="stylesheet" href="../css/style.css">
<?php
//for giving title to page
$title = "This is title for the page";
$md = "This is meta description for the page";
//including header using this command
include '../components/connect.php';
include '../components/header.php';

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['passid'];
  $contract = $_POST['phone'];
  $date = $_POST['email'];

  $sql = "INSERT INTO `Customer`(F_name,L_name,Pass_id,Phone_num,Email)
    values ('$firstname','$lastname','$password','$contract','$date')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("location:customer_list.php");
  } else {
    die(mysqli_error($conn));
  }
}
?>



<!-- dividing form section with margin 5 -->

  <script>
    function validateForm() {
      let x = document.forms["addcustomer"]["firstname"].value;
      let y = document.forms["addcustomer"]["lastname"].value;
      let z = document.forms["addcustomer"]["passid"].value;
      let a = document.forms["addcustomer"]["phone"].value;
      let b = document.forms["addcustomer"]["email"].value;
      if (x == "") {
        alert("First Name must be filled out");
        return false;
      }
      if (y == "") {
        alert("Last Name must be filled out");
        return false;
      }
      if (z == "") {
        alert("Pass id must be filled out");
        return false;
      }

      if (a == "") {
        alert(" phone must be filled out");
        return false;
      }
      if (b == "") {
        alert(" email must be filled out");
        return false;
      }

    }
  </script>
</section>
<body>
    <div class="container my-5">
    <div class="button_list" style="margin-bottom: 30px;">
    <button class="btn btn-primary" style="background-color: #cc7c19;"> <a href="contract_list.php" class="text-light"> Contracts </a></button>
    <button class="btn btn-primary"> <a href="apartment_admin.php" class="text-light"> Apartments </a></button>
    <button class="btn btn-primary"> <a href="customer_list.php" class="text-light"> Customers </a></button>
    <button class="btn btn-primary"> <a href="staff_list.php" class="text-light"> Staff </a></button>
  </div>
    <form  name="addcustomer" method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label class="lab">First name</label>
            <input type="text" name="firstname" class="form-control"placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label class="lab">Lastname</label>
            <input type="text" name="lastname" class="form-control"placeholder="Enter last name">
        </div>
        <div class="form-group">
            <label class="lab">Passport serial number</label>
            <input type="text" name="passid" class="form-control"placeholder="Enter Passport serial number">
        </div>
        <div class="form-group">
            <label class="lab">Phone</label>
            <input type="text" name="phone" class="form-control"placeholder="Enter your phone number">
        </div>
        <div class="form-group">
            <label class="lab">Email</label>
            <input type="text" name="email" class="form-control"placeholder="Enter email address">
        </div>
        <div class="form-group">
            <button type="submit" class="descr_btn btn_save" name= "submit">Add customer</button>
        </div>
    </form>
    </div>



  </body>
<?php
include '../components/footer.php';
?>