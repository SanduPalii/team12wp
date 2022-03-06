<?php 

include '../components/connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `Newsletter` where ID_newsletter =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Deleted successfully";
       header('location:list_newsletter.php');


    }else{
        die(mysqli_error($conn));
    }
}

?>