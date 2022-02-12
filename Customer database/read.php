<?php
include 'header.php';
include 'db.php'; 
$sql = "select * from Customer";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table class=\"table\"><tr><th>Customer ID</th><th>First Name</th><th>Last Name</th>
<th>Pass Id</th><th>Contract rent</th><th>Date end</th><th>Phone num</th><th>email</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>" . $row["ID customer"] . "</td><td>". $row["F_Name"]."</td> <td>". $row["L name"] 
        
        ."</td><td>". $row["Pass id"]. "</td><td>". $row["Contract rent"] . "<tr><td>" . $row["Date end"] .  "<tr><td>" . $row["Phone num"] ."</td><td>". $row["email"]
        ."</td></tr>";
    }
    echo "</table>";
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}


$conn->close();
include 'footer.php';
?>