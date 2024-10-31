<?php
// Get the value from json and manuplate the value of it
$jsonFileName = 'inventory.json';

// Check if the file exists
if (!file_exists($jsonFileName)) {
    die("File does not exist");
}

$content = file_get_contents($jsonFileName);

// Convert it into an associative array
$arr = json_decode($content, true); // 'true' makes it an associative array

// Loop through each item and decrement the quantity if it's greater than 0
foreach ($arr as &$item) { 
    if ($item["quantity"] > 0) {
        $item["quantity"]--;
    }
}

// Now encode it again to make it a string
$data = json_encode($arr, JSON_PRETTY_PRINT);

// Save the updated array back to the JSON file
file_put_contents($jsonFileName, $data);
echo "File successFully Updated";
?>
