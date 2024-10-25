<?php
// What is $_FILES?
// When we want to perform any operation with a file, we use this superglobal variable.
// For example, it can be used to upload, delete, or update a file.
// Most of the time, it is used to upload files.

// To get the file details by specifying its input name in the form
// print_r($_FILES["fileUpload"]);

// Check if a file was uploaded
if ($_FILES["fileUpload"]) {
    // Get the name of the uploaded file
    $uploadedFileName = $_FILES["fileUpload"]["name"];
    
    // Define the path where the file should be uploaded
    $whereToUpload = "./uploads/" . $uploadedFileName;
    
    // Get the temporary location of the file on the server
    $currTempLocation = $_FILES["fileUpload"]["tmp_name"];
    
    // temporary location to the upload directory
    move_uploaded_file($currTempLocation, $whereToUpload);
    
    echo "File uploaded successfully!";
} else {
    die("Unable to upload the file.");
}
?>
