<?php 

$con = new mysqli('db', 'root','password', 'Coliving');


if(!$con){
    die(mysqli_error($con));
}


?>