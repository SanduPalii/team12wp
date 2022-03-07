<link rel="stylesheet" href="../css/style.css">
<?php
include '../components/connect.php';
include '../components/header.php';

if (isset($_POST['submit'])) {
    $idcustomer = $_POST['ID_customer'];
    $datestart = $_POST['datestart'];
    $dateend = $_POST['dateend'];
    $price = $_POST['Price'];
    $idstaff = $_POST['ID_staff'];
    $idapartment = $_POST['ID_apartment'];
    $sql = "INSERT INTO `Contract`(ID_customer,Date_start,Date_end,Price,ID_staff,ID_apartment)
  values ('$idcustomer','$datestart','$dateend','$price','$idstaff','$idapartment')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "contract added successfully";
        header('location:contract_list.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<section class="container my-5">



    <!-- adding form  -->
    <form name="addcustomer" method="post" onsubmit="return validateForm()">
    <div class="mb-3 form-group">
        <label class="form-label">Customer</label>
        <?php $sql = "SELECT  * FROM Customer";
        $result = mysqli_query($conn, $sql);

        echo "<select class='form-control' name='ID_customer'><option>Customer</option>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['F_name'] . "'>" . $row['F_name'] . "</option>";
        }
        echo "</select>";?>
    </div>
    <div class="mb-3 form-group">
        <label class="form-label ">Date start</label>
        <input class="form-control" type="date" name="datestart" value="2021-03-08">
    </div>
    <div class="mb-3 form-group">
        <label class="form-label">Date end</label>
        <input class="form-control" type="date" name="dateend" value="2021-03-08">
    </div>

    <div class="mb-3 form-group">
        <label class="form-label">Price € </label>
        <input class="form-control" type="text" class="form-control" placeholder="Enter price in € here. without €" name="Price">
    </div>
    <div class="mb-3 form-group">
        <label class="form-label">Staff</label>
        <?php $sql = "SELECT  * FROM Staff";
        $result = mysqli_query($conn, $sql);

        echo "<select class='form-control' name='ID_staff'><option>Customer</option>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['F_name'] . "'>" . $row['F_name'] . "</option>";
        }
        echo "</select>";?>
    </div>
    <div class="mb-3 form-group">
        <label class="form-label">Apartment</label>
        <?php $sql = "SELECT  * FROM apartment";
        $result = mysqli_query($conn, $sql);

        echo "<select class='form-control' name='ID_apartment'><option>Customer</option>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['apartment_id'] . "'>" . $row['apartment_id'] . "</option>";
        }
        echo "</select>";?>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    </form>
</section>
<?php
include '../components/footer.php';
?>