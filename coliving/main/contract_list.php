<link rel="stylesheet" href="../css/style.css">
<?php
//for giving title to page
$title = "This is title for the page";
$md = "This is meta description for the page";
//including header using this command
include '../components/connect.php';
include '../components/header.php';
?>
<div class="container my-5">
<div class="button_list">
    <button class="btn btn-primary" style="background-color: #cc7c19;"> <a href="contract_list.php" class="text-light"> Contracts </a></button>
    <button class="btn btn-primary"> <a href="apartment_admin.php" class="text-light"> Apartments </a></button>
    <button class="btn btn-primary"> <a href="customer_list.php" class="text-light"> Customers </a></button>
    <button class="btn btn-primary"> <a href="staff_list.php" class="text-light"> Staff </a></button>
    <button class="btn btn-primary"> <a href="contact_list.php" class="text-light"> Contacts </a></button>
  </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Contract Id</th>
                <th scope="col">Customer Id</th>
                <th scope="col">Date start</th>
                <th scope="col">Date end</th>
                <th scope="col">Price</th>
                <th scope="col">Id staff</th>
                <th scope="col">Id apartment</th>
                <th scope="col"><button class="btn_op up btn_margin_top"> <a href="contract_add.php" class="text-light"> Add </a></button></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql =   "SELECT * FROM `Contract`";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID_contract'];
                    $customerid = $row['ID_customer'];
                    $datestart = $row['Date_start'];
                    $dateend = $row['Date_end'];
                    $price = $row['Price'];
                    $staffid = $row['ID_staff'];
                    $apartmentid = $row['ID_apartment'];
                    echo '<tr>
             <td scope="row"><a href="contract_list.php?updateid='.$id.'"class="text-light">'.$id.'</a></td>
             <td>' . $customerid . '</td>
             <td>' . $datestart . '</td>
             <td>' . $dateend . '</td>
             <td>' . $price . '</td>
             <td>' . $staffid . '</td>
             <td>' . $apartmentid . '</td>
             <td>
             <button class="btn_op up"><a href="contract_update.php?updateid='.$id.'"class="text-light">Update</a></button>
          <button class="btn_op del"><a href="contract_delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
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