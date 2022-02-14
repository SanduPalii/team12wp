<?php 
//You are required to work as a team and complete the following task during the online session
// we will check your implementation on 16.02.2022 and the team repo must contain the following task
// Each one of you will first do it in your own repo (or branch) and then the final version in the team repo. 
// This task is not graded however will have some impact on the final grade
// It also will help you to practice utlizing GitHub in project work

# 1. Create/read a text file by using approprite php functions 
    # Step 1: check if file exists or not
date_default_timezone_set('Europe/Helsinki');
echo "<h2>Checking if file exists or not</h2>";
if (file_exists("groupTask/new_file.txt")){
    echo "file exisits";
}
else 
    echo "file not found";
    echo "<hr><h2>Creating a file </h2>";
# Step 2: Open the file using appropriate mode. (each member opens the file in different mode)
$newfile = fopen('new_file.txt','w') or die ("Failed to create a file");
# Step 3: Use fwrite/fread function to write/read on the file your team name and members name. 
$txt = "Hello world this is interesting. <br>";
    fwrite($newfile, $txt);  
# Step 4: Close the file 
fclose($newfile);
?>


<?
#2. Uploaing files 
# Step 1: Create a simple html form to upload a file. 
?>
<hr><h2>Upload your image! Max 2MB </h2>

<form enctype="multipart/form-data" action="upload.php" method="POST">
    Select file to upload: <input name="userfile" type="file" required><br>
    <input type="submit" value="Upload File" />
</form>
<hr><h2>PHP Date function </h2>
<?
# Step 2: You are required to limit the upload file size to 2 MB.
# --- The MAX_FILE_SIZE item cannot specify a file size greater than the file size that has been set in the upload_max_filesize in the php.ini file. The default is 2 megabytes.

# Step 3: Make sure that users can submit only images. 

# Step 4: Upon successful upload, you print a message "File uploaded successfully" and also 
# provide the link to the directory where files are uploaded.
?>
