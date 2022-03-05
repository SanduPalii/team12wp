<?php
include '../components/connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username= '".$username."' AND password= '".$password."' ";

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user") 
    {   
        $_SESSION["username"]=$username;
        header("location:apartment_list.php");
    }

    else if($row["usertype"]=="admin") 
    {
        $_SESSION["username"]=$username;
        
        header("location:apartment_admin.php");
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

    <div style="margin:0 auto; margin-bottom: 40px; width:400px;">
            <h1 style="margin-top:20px; text-align:center;">Login Form</h1>
            <br>
            <div style="background-color:#6E5F56; width: 500px;">
                <br><br>

                <form action="#" method="POST">
        <div style="margin-left:30px;">
            <label>username</label>
            <input type="text" name="username" required>
        </div>
        <br><br>

        <div style="margin-left:30px;">
            <label>password</label>
            <input type="password" name="password" required>
        </div>
        <br><br>

        <div style="margin-left:100px;">

            <input type="submit" value="Login">
        </div>
        </form>


        <br><br>
        </div>
    </div>
    

</body>
</html>
<?php include '../components/footer.php';?>