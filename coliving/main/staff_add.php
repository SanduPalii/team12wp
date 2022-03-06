<link rel="stylesheet" href="../css/style.css">
<?php
include '../components/connect.php';
include '../components/header.php';

if (isset($_POST['submit'])) {
  $firstname = $_POST['F_name'];
  $lastname = $_POST['L_name'];
  $email = $_POST['Email'];
  $commision = $_POST['Commision'];

  $sql = "INSERT INTO `Staff`(F_name,L_name,Email,Commision)
    values ('$firstname','$lastname','$email','$commision')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("location:staff_list.php");
  } else {
    die(mysqli_error($conn));
  }
}
?>

</section>
<body>
    <div class="container my-5">
    <form  name="addstaff" method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label class="lab">First name</label>
            <input type="text" name="F_name" class="form-control"placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label class="lab">Last name</label>
            <input type="text" name="L_name" class="form-control"placeholder="Enter last name">
        </div>
        <div class="form-group">
            <label class="lab">Email</label>
            <input type="text" name="Email" class="form-control"placeholder="Enter email">
        </div>
        <div class="form-group">
            <label class="lab">Commision</label>
            <input type="text" name="Commision" class="form-control" placeholder="Commision for sales">
        </div>
        <div class="form-group">
            <button type="submit" class="descr_btn btn_save" name= "submit">Add staff</button>
        </div>
    </form>
    </div>



  </body>
<?php
include '../components/footer.php';
?>