<?php
// What are super global variables?
// They are built-in variables accessible anywhere in the script.

/*
These are the global variables available in PHP:
$_GET — Collects data sent via HTTP GET method.
$_POST — Collects data sent via HTTP POST method.
$_REQUEST — Collects data from both GET and POST requests.
$_SERVER — Contains information about the server and execution environment.
$_SESSION — Stores and retrieves session variables.
$_COOKIE — Stores and retrieves cookie values.
$_FILES — Handles file uploads.
$_ENV — Accesses environment variables.
$GLOBALS — Contains a reference to all variables available in the global scope.
*/

// ************** What is $GLOBALS? **************
// $a = "10";
// To check all variables available in the global scope:
print_r($GLOBALS);

// ************* What is $_SERVER? **************
// $_SERVER provides all the information about the server.
echo "<pre>";
print_r($_SERVER); // Display all server information
// To get a specific piece of information, for example, the request method:
echo $_SERVER["REQUEST_METHOD"];
echo "</pre>";
?>
