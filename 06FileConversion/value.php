<?php
// Covert JSON file into csv file
$jsonFileName = 'value.json';

// step 1
if(!file_exists($jsonFileName))
    exit ($jsonFileName . " does not exist");

// convert into a string
$str = file_get_contents($jsonFileName);
// True means we need it as an associative array
// JSON decode gives us an array, and encode is for string (remember it like "d" is near to "a," meaning it converts JSON to an array, and the other one is to a string)
$arr = json_decode($str, true);

if(!$arr)
    exit("File not in JSON format");

//========
$csvFileName = "value.csv";
$handle = fopen($csvFileName, "w");

$header = ['title', 'author', 'genre', 'year'];
fputcsv($handle, $header);

foreach ($arr as $a) {
    $book = [$a['title'], $a['author'], $a['genre'], $a['year']];
    fputcsv($handle, $book);
}

fclose($handle);
echo "$csvFileName was created";

?>
