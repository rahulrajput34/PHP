<?php
// Covert CSV file to JSON file
$csvFileName = 'data.csv';

// step 1
if(!file_exists($csvFileName))
    die('The provided csv file does not exist');

// if yes open it and close it
$handle = fopen($csvFileName, 'r');

if(is_null($handle))
    die("The csv file is empty");

$header = fgetcsv($handle);
// print_r($header);

$data = [];
while (($row = fgetcsv($handle)) !== false){
    // Key from header and value from row
    // header gives basic overview and row gives each row
    $arr = array_combine($header, $row);
    echo"<br>";
    // print_r($arr);
    // put the arr into the data
    array_push($data, $arr);
}

// Now we have the arr with all the values in the PHP array format
// Now convert it into a json string
// This is the filename we want
$filename = "data.json";
$string = json_encode($data, JSON_PRETTY_PRINT);
if(file_put_contents($filename, $string))
    echo $filename." successfully created";
else
    echo $filename." can't be written";

fclose($handle);
?>
