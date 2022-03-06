<?php 

include '../components/connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `Contact` where ID_contact =$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Deleted successfully";
       header('location:contact_list.php');


    }else{
        die(mysqli_error($conn));
    }
}

?>
