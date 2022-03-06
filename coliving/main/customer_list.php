<link rel="stylesheet" href="../css/style.css" class="style">
<?php
//for giving title to page
$title = "This is title for the page";
$md = "This is meta description for the page";
//including header using this command

include '../components/header.php';
?>

<!-- adding header title -->



<!-- dividing form section with margin 5 -->
<div class="container my-5">


  <button class="btn btn-primary"> <a href="customer_add.php" class="text-light"> Add Customer </a>
  </button>



  <table class="table">
    <thead>
      <tr>
        <th scope="col">Customer Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Pass id</th>
        <th scope="col">Phone number</th>
        <th scope="col">Email</th>
        <th scope="col">Operations</th>
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
        <button class="btn_op up"><a href="../components/update.php?updateid=' . $id . '"class="text-light">Update</a></button>
        <button class="btn_op del"><a href="../components/delete.php?deleteid=' . $id . '"class="text-light">Delete</a></button>
             </td>
           </tr>';
        }
      }
      ?>


    </tbody>
  </table>


</div>
<?php include '../components/afterlogin_footer.php'; ?>