<?php
if (isset($_POST['submit'])){
    $file= $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','pdf');
    

    if (in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize<200000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploaded/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "The file has been successfully uploaded. <br>";
                echo "<a href='uploaded/'> <br>Click to see the images </a>";

                

            } else {
                echo"Your file is too big!";
            }
        } else {
            echo"There was an error uploading your file!";
        }
     

    } else {
        echo"You cannot upload files of this type!";
    }
    


}

?>