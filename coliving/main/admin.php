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


    <button class="btn btn-primary"> <a href="add_contract.php" class="text-light"> Add new contract </a>
    </button>


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
                <th scope="col">Setting</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql =   "SELECT * FROM `Contract`";
            $result = mysqli_query($conn, $sql);
            if ($result) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $contractid = $row['ID_contract'];
                    $customerid = $row['ID_customer'];
                    $datestart = $row['Date_start'];
                    $dateend = $row['Date_end'];
                    $price = $row['Price'];
                    $staffid = $row['ID_staff'];
                    $apartmentid = $row['ID_apartment'];
                    echo '<tr>
             <td scope="row">' . $contractid . '</td>
             <td>' . $customerid . '</td>
             <td>' . $datestart . '</td>
             <td>' . $dateend . '</td>
             <td>' . $price . '</td>
             <td>' . $staffid . '</td>
             <td>' . $apartmentid . '</td>
             <td>
             <button class="btn btn-primary" >  <a href= "update_contract.php?updateid=' . $contracrid . '" class= "text-light"> Update </a>  </button>
             <button class="btn btn-danger" >  <a href= "delete_contract.php?deleteid=' . $contractid . '" class= "text-light"> Delete </a>  </button>
             </td>
           </tr>';
                }
            }
            ?>


        </tbody>

    </table>


</div>
<?php include '../components/footer.php'; ?>