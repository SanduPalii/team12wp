<?php
//for giving title to page
$title = "This is title for the page";
$md = "This is meta description for the page";
//including header using this command
include 'connect.php';
require 'header.php';

if (isset($_POST['submit'])) {
    $datestart = $_POST['datestart'];
    $dateend = $_POST['dateend'];
    $price = $_POST['price'];
    $sql = "INSERT INTO `Contract`(Date_start,Date_end,Price)
  values ('$datestart','$dateend','$price')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "contract added successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>
<!-- adding header title -->
<div class="wrapper">
    <div class="container">
        <h1 class="title">Add new contract</h1>
        <div class="subtitle"></div>
    </div>
</div>
</section>

<div class="container my-5">

    <button class="btn btn-primary"> <a href="contract_list.php" class="text-light"> Go back </a>

    </button>

</div>

<!-- dividing form section with margin 5 -->
<section class="container my-5">



    <!-- adding form  -->
    <form name="addcustomer" method="post" onsubmit="return validateForm()">
        <div class="mb-3">
            <label class="form-label">Date start</label>
            <input type="date"  name="datestart" value="2021-03-08">
        </div>
        <div class="mb-3">
            <label class="form-label">Date end</label>
            <input type="date"  name="dateend" value="2021-03-08">
        </div>

        <div class="mb-3">
            <label class="form-label">Price € </label>
            <input type="number" class="form-control" placeholder="Enter price in € here. without €" name="price">

        </div>





        <!-- submit functionality -->
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    </form>
</section>
<?php
include 'footer.php';
?>