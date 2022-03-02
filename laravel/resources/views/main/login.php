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
        echo "user";
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

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="/laravel/resources/css/style.css">
    <link rel="stylesheet" href="/laravel/resources/css/media.css">
</head>
<body>

<section class="contact">
    <?php include '../components/header.php';?>
    <div class="wrapper_contact">
        <div class="container">
            <h1 class="contact_title"></h1>
        </div>
    </div>

</section>

<section class="contact_info">
    <div class="container">
        <h2 class="contact_subtitle">
            Welcome to Admin Login
        </h2>
        <div class="contact_wrapper">
        <center>
            <h1></h1>
            <br><br>Login Form<br><br>
            <div style="background-color:#6E5F56; width: 500px;">
                <br><br>

                <form action="#" method="POST">
        <div>
            <label>username</label>
            <input type="text" name="username" required>
        </div>
        <br><br>

        <div>
            <label>password</label>
            <input type="password" name="password" required>
        </div>
        <br><br>

        <div>

            <input type="submit" value="Login">
        </div>
        </form>


        <br><br>
        </div>
    </center>
    
        </div>
    </div>
</section>
<?php include '../components/footer.php';?>