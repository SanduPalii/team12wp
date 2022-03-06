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
                <th scope="col">Newsletter Id</th>
                <th scope="col">Email</th>

            </tr>
        </thead>
        <tbody>

            <?php
            include '../components/connect.php';
            $sql =   "SELECT * FROM `Newsletter`";
            $result = mysqli_query($conn, $sql);
            if ($result) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID_newsletter'];
                    $email = $row['newsletter_email'];
                    


                    echo '<tr>
             <td scope="row">' . $id . '</td>
             <td>' . $email . '</td>
             
             <td
             class="form-group">
             <button >  <a href= "delete_newsletter.php?deleteid=' . $id . '"> Delete </a>  </button>

                        
             </td>
            
           </tr>';
                }
            }
            ?>


        </tbody>
    </table>


</div>
<?php include '../components/afterlogin_footer.php'; ?>