<?php 
//for giving title to page
$title="This is title for the page";
$md= "This is meta description for the page";
//including header using this command
include 'connect.php';
include 'header.php';
?>

<!-- adding header title -->
<div class="wrapper">
      <div class="container">
        <h1 class="title">Customer list</h1>
        <div class="subtitle"></div>
      </div>
    </div>
    </section>


<!-- dividing form section with margin 5 -->
<div class="container my-5">

<button class="btn btn-primary" >  <a href= "customer.php" class= "text-light"> Add Customer </a>    
     </button>



     <table class="table">
  <thead>
    <tr>
      <th scope="col">Customer Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Password</th>
      <th scope="col">Contract rent</th>
      <th scope="col">Date end</th>
      <th scope="col">Phone num</th>
      <th scope="col">email</th>
      <th scope="col">settings</th>
    </tr>
  </thead>
  <tbody>

  <?php
     $sql=   "SELECT * FROM `customer`";
     $result= mysqli_query($con,$sql);
     if($result){
         
         while($row=mysqli_fetch_assoc($result)){
             $id=$row['id'];
             $firstname=$row['f_name'];
             $lastname=$row['l_name'];
             $password=$row['password'];
             $contract_rent=$row['contract_rent'];
             $date_end=$row['date_end'];
             $phone_number=$row['phone_number'];
             $email=$row['email'];
             echo '<tr>
             <th scope="row">'.$id.'</th>
             <td>'.$firstname.'</td>
             <td>'.$lastname.'</td>
             <td>'.$password.'</td>
             <td>'.$contract_rent.'</td>
             <td>'.$date_end.'</td>
             <td>'.$phone_number.'</td>
             <td>'.$email.'</td>
             <td>
             <button class="btn btn-primary" >  <a href= "update.php?updateid='.$id.'" class= "text-light"> Update </a>  </button>
             <button class="btn btn-danger" >  <a href= "delete.php?deleteid='.$id.'" class= "text-light"> Delete </a>  </button>
             </td>
           </tr>';
         }
     }
  ?>
  
  
  </tbody>
</table>


</div>