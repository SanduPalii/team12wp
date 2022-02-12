<?php include 'db.php' ;
include 'header.php' ;
$ID= $_POST['ID customer'];
$F_Name= $_POST['F_Name'];
$L= $_POST['L name'];
$Pass= $_POST['Pass id'];
$Contract= $_POST['Contract rent'];
$Date= $_POST['Date end'];
$phone= $_POST['phone num'];
$email= $_POST['email'];


if (empty($_POST['fname'])) {
    echo "<h1>Please input fname</h1>";
} 
    else {
$sql="insert into Customer (ID customer, F_Name, L name, Pass id, Contract rent, Date end, phone num, email)
values('$ID', '$F_Name', '$L', '$Pass','$Contract', '$Date', '$phone', $email')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

}
# -> this is single arrow operator known as object operator 
# -> it is used to access methods and properties of a class
# === it is known as identical operator and does a strict comparison 

include 'footer.php';
?>