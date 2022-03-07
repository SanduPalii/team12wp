<link rel="stylesheet" href="../css/style.css" class="style">
<?php
session_start(); 
 
if(!isset($_SESSION["username"])) 
{ 
 header("Location:login.php"); 
  exit; 
}


?>

<?php include '../components/header.php';?>
<div class="container my-5">
    <div class="button_list">
        <button class="btn btn-primary"> <a href="contract_list.php" class="text-light"> Contracts </a></button>
        <button class="btn btn-primary"> <a href="apartment_admin.php" class="text-light"> Apartments </a></button>
        <button class="btn btn-primary"> <a href="customer_list.php" class="text-light"> Customers </a></button>
        <button class="btn btn-primary" > <a href="staff_list.php" class="text-light"> Staff </a></button>
        <button class="btn btn-primary" style="background-color: #cc7c19;"> <a href="contact_list.php" class="text-light"> Contacts </a></button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Contact Id</th>
                <th scope="col"> Name</th>
                <th scope="col">Email</th>
                <th scope="col">Country</th>
                <th scope="col">Message</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include '../components/connect.php';
            $sql = "SELECT * FROM `Contact`";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID_contact'];
                    $name = $row['Name'];
                    $email = $row['Email'];
                    $country = $row['Country'];
                    $message = $row['Message'];
                    echo '<tr>
             <td scope="row">' . $id . '</td>
             <td>' . $name . '</td>
             <td>' . $email . '</td>
             <td>' . $country . '</td>
             <td>' . $message . '</td>
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