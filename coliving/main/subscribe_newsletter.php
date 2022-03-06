<link rel="stylesheet" href="../css/style.css">
<?php
//for giving title to page
$title = "This is title for the page";
$md = "This is meta description for the page";
//including header using this command
include '../components/connect.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];


    $sql = "INSERT INTO `Newsletter`(newsletter_email)
    values ('$email')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
       // header("location:../main/index.php");
    } else {
        die(mysqli_error($con));
    }
}
?>

<script>
    function validateForm() {
        let x = document.forms["newsletter"]["email"].value;
        if (x == "") {
            alert(" email must be filled out");
            return false;
        }

    }
</script>

<body>
    <div class="container my-5">
        <form name="addcustomer" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label class="lab">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email address"required>
            </div>
            <div class="form-group">
                <button type="submit" class="descr_btn btn_save" name="submit">Subscribe</button>
        </form>
    </div>
    </div>


</body>
<?php include '../components/footer.php'; ?>