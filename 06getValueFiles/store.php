<?php
// Get the value from the JSON and make the value well structured
$fileName = 'store.json';
// Check if the file exists
if (!file_exists($fileName)) {
    die("File does not exist");
}
// Read the file to a string
$fileContent = file_get_contents($fileName);
print_r($fileContent);

//Convert to an associative array
$arr = json_decode($fileContent, true);
print_r($arr);

// Render to the browser’s window
header("Content-type: application/json");
echo json_encode($arr, JSON_PRETTY_PRINT);
?>