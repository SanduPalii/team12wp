<?php
session_start();
include '../components/connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username= '".$username."' AND password= '".$password."' ";

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="admin") 
    {
        $_SESSION["username"]=$username;
        
        header("location:contract_list.php");
    }

    else
    {
        echo "username or password incorrect";
    }



}
$title="login";
$md= "This is meta description is login";
include '../components/header.php';

    
?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/style.css" class="style">
</head>
<body>

    <div style="margin:0 auto; margin-bottom: 40px; width:400px;  ">
            
            <br>
            <div style="padding-top: 20px; background-color:#D9C2A7; width: 500px; border-radius: 10px;">
            <h1 style="text-shadow:2px 2px #fff; text-align:center;">Login Form</h1>
                <br><br>

                <form action="#" method="POST">
        <div class="form-group" style="margin-left:30px;">
            <label style="font-size:18px; font-weight: bold;">Username</label>
            <input style="margin-top: 10px; width:440px;" class="form-control" type="text" name="username" required>
        </div>
        <br><br>

        <div class="form-group" style="margin-left:30px; width:440px;">
            <label style="font-size:18px; font-weight: bold;">Password</label>
            <input style="margin-top: 10px; margin-right: 40px;" class="form-control" type="password" name="password" required>
        </div>
        <br><br>

        <div style="margin-left:100px;">

            <input class="descr_btn" type="submit" value="Login">
        </div>
        </form>


        <br><br>
        </div>
    </div>
    

</body>
</html>
<?php include '../components/footer.php';?>