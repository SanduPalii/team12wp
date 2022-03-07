<?php
session_start(); 
 
if(!isset($_SESSION["username"])) 
{ 
 header("Location:login.php"); 
  exit; 
}


?>
<link rel="stylesheet" href="../css/style.css" class="style">
<?php
//for giving title to page
$title = "This is title for the page";
$md = "This is meta description for the page";
include '../components/header.php';
?>
<div class="container my-5">
<div class="button_list">
    <button class="btn btn-primary"> <a href="contract_list.php" class="text-light"> Contracts </a></button>
    <button class="btn btn-primary"> <a href="apartment_admin.php" class="text-light"> Apartments </a></button>
    <button class="btn btn-primary" style="background-color: #cc7c19;"> <a href="customer_list.php" class="text-light"> Customers </a></button>
    <button class="btn btn-primary"> <a href="staff_list.php" class="text-light"> Staff </a></button>
    <button class="btn btn-primary"> <a href="contact_list.php" class="text-light"> Contacts </a></button>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Customer Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Pass id</th>
        <th scope="col">Phone number</th>
        <th scope="col">Email</th>
        <th scope="col"><button class="btn_op up btn_margin_top"> <a href="customer_add.php" class="text-light"> Add </a></button></th>
      </tr>
    </thead>
    <tbody>

      <?php
      include '../components/connect.php';
      $sql =   "SELECT * FROM `Customer`";
      $result = mysqli_query($conn, $sql);
      if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['ID_customer'];
          $firstname = $row['F_name'];
          $lastname = $row['L_name'];
          $passid = $row['Pass_id'];
          $phone = $row['Phone_num'];
          $email = $row['Email'];

          echo '<tr>
             <td scope="row">' . $id . '</td>
             <td>' . $firstname . '</td>
             <td>' . $lastname . '</td>
             <td>' . $passid . '</td>
             <td>' . $phone . '</td>
             <td>' . $email . '</td>
            
             <td>
        <button class="btn_op up"><a href="customer_update.php?updateid=' . $id . '"class="text-light">Update</a></button>
        <button class="btn_op del"><a href="customer_delete.php?deleteid=' . $id . '"class="text-light">Delete</a></button>
             </td>
           </tr>';
        }
      }
      ?>

    </tbody>
  </table>


</div>
<div class="container">
    <button class="logout btn"><a href="../components/logout.php">Logout</a></button>
  </div>
<?php include '../components/footer.php'; ?>