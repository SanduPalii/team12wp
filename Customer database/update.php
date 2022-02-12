
<?php
include_once 'header.php';
require_once 'db.php'; 
$sql = "select * from Customer";
$result = $conn->query($sql);?>
<table class="table">
<tr>
<th>Customer ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Pass Id</th>
<th>Contract rent</th> 
<th>Date end</th> 
<th>Phone num</th>
<th>email</th>
<th>edit num</th>
<th>delete</th>


</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["ID customer"]; ?></td>
<td><?php echo $row["F_Name"]; ?></td>
<td><?php echo $row["L name"]; ?></td>
<td><?php echo $row["Pass id"]; ?></td>
<td><?php echo $row["Contract rent"]; ?></td>
<td><?php echo $row["Date end"]; ?></td>
<td><?php echo $row["phone num"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><a href="updatesingle.php?id=<?php echo $row['id']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
<?php include 'footer.php' ?>

