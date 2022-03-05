<?php 

include '../components/connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `Customer` where ID_customer =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Deleted successfully";
       header('location:customer_list.php');


    }else{
        die(mysqli_error($conn));
    }
}

?>
