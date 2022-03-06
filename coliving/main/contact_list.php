<link rel="stylesheet" href="../css/style.css" class="style">
<?php
//for giving title to page
$title = "This is title for the page";
$md = "This is meta description for the page";
//including header using this command

include '../components/header.php';
?>

<!-- adding header title -->



<!-- dividing form section with margin 5 -->
<div class="container my-5">





    <table class="table">
        <thead>
            <tr>
                <th scope="col">Contact Id</th>
                <th scope="col"> Name</th>
                <th scope="col">Email</th>
                <th scope="col">Country</th>
                <th scope="col">Message</th>

            </tr>
        </thead>
        <tbody>

            <?php
            include '../components/connect.php';
            $sql =   "SELECT * FROM `Contact`";
            $result = mysqli_query($conn, $sql);
            if ($result) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID_contact'];
                    $name = $row['contact_name'];
                    $email = $row['contact_email'];
                    $country = $row['contact_country'];
                    $message = $row['contact_message'];


                    echo '<tr>
             <td scope="row">' . $id . '</td>
             <td>' . $name . '</td>
             <td>' . $email . '</td>
             <td>' . $country . '</td>
             <td>' . $message . '</td>
             <td
             class="form-group">
             <button >  <a href= "delete_contact.php?deleteid=' . $id . '"> Delete </a>  </button>

                        
             </td>
            
           </tr>';
                }
            }
            ?>


        </tbody>
    </table>


</div>
<?php include '../components/afterlogin_footer.php'; ?>