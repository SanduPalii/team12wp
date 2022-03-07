<?php 

include '../components/connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `Staff` where ID_staff =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Deleted successfully";
       header('location:staff_list.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>
