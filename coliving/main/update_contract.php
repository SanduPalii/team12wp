<?php 
//for giving title to page
$title="This is title for the page";
$md= "This is meta description for the page";
//including header using this command
include 'connect.php';
include 'header.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $passid =$_POST['passid'];
    $phone = $_POST['phone'];
    $email =  $_POST['email'];
    $id= $_GET['updateid'];

    $sql="UPDATE `Contract` SET ID_customer=$id, F_name='$firstname', L_name='$lastname', Pass_id='$passid',Phone_num='$phone',Email= '$email' where ID_customer=$id"; 
   
    $result = mysqli_query($con,$sql);
    if($result){
        echo "data updated successfully";
       

    }else{
        die(mysqli_error($con));
    }
}
?>