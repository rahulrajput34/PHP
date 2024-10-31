<?php
// Get the data from csv, using the regEx filter the values
$csvFileName = 'RegEx.csv';

// Step 1: Check if the CSV file exists
if (!file_exists($csvFileName)) {
    die('Please provide a valid CSV file name');
}

// Step 2: Open the CSV file
$handle = fopen($csvFileName, 'r');

// Check if file opened successfully
if ($handle === false) {
    die("Error: Could not open the file");
}

// Step 3: Read each line and display entries with '44' in the phone number
while (($row = fgetcsv($handle)) !== false) {
    $contactNumber = $row[0];
    $userName = $row[1];

    // Check if '44' is in the contact number
    if (preg_match('/44/', $contactNumber)) {
        echo "<br>The number of the user is $contactNumber and the name of the user is $userName<br>";
    }
}

// Close the file after reading
fclose($handle);
?>
