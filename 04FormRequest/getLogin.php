<?php
// Data is going to be in an associative array
print_r($_GET);

// We passed the condition over here because if data is not present in the URL, it would show an error
if ($_GET) {
    // To get the name, make sure we have passed the valid name that was set inside the input of the HTML
    // The data is also present in the URL
    // We use $_GET and concatenation (.) for printing because the data is in an associative array
    echo "User name is: " . $_GET['user_name'];
    echo "<br>";
    echo "User password is: " . $_GET['user_password'];
}
?>
