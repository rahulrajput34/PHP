<?php
// To get all data into an associative array
print_r($_POST);
// If the request method is POST, then it works
if ($_POST) {
    // The data is not present in the URL
    echo "User name is: " . $_POST['user_name'];
    echo "<br>";
    echo "User password is: " . $_POST['user_password'];
}
?>
