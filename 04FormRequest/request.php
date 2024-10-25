<?php
// $_REQUEST is a built-in global variable (we also have others like $_GET, $_POST).
// It's a common way of handling both GET and POST requests.
// We do not need to specify which request method is used, whether it's GET or POST, it works for both.

// The benefit here is that we don't need to specify whether the request is GET or POST.
print_r($_REQUEST);

if ($_REQUEST) {
    foreach ($_REQUEST as $key => $data) {
        echo "<br/>";
        echo "$key is $data";
        echo "<br/>";
    }
}
?>
