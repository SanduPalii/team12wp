<?php
include '../components/connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `Contract` where ID_contract=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"Deleted successful";
        header('location:contract_list.php');
    }else{
        die("Connection failed: ".$conn->connect_error);
    }
}
?>