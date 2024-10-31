<?php
// Get the value from txt file
$filename = 'count.txt';

// Check if file exits or not 
if(!file_exists($filename))
    die("File name $filename is not exits");

//To get the content from the filename
// Read the entire file into  the string
$odometer = file_get_contents($filename);

// Check if the value is integer or not
if(is_numeric($odometer)){
    // Validate the values
    $safeOdometer = htmlspecialchars($odometer,ENT_QUOTES, 'UTF-8');
    echo "The odometer reading is: " . $safeOdometer;
} else {
    echo "Invalid odometer value in the file.";
}
?>

