<?php
include '../components/connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `apartment` where apartment_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"Deleted successful";
        header('location:apartment_admin.php');
    }else{
        die("Connection failed: ".$conn->connect_error);
    }
}
?>