<?php
include 'connect.php';

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
        
        header("location:apartment_list.php");
    }

    else
    {
        echo "username or password incorrect";
    }



}
$title="login";
$md= "This is meta description is login";
include 'header.php';
    
?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

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
    <br><br><br>

</body>
</html>
<?php
    include 'footer.php';
    ?>