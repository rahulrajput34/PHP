<?php
// Array are collection of data and in its 0 index as well in PHP
// Two ways to decalre an Array inside the PHP
$users = ["Rahul", "Urvesh", "RK"];

// To print the array we use print_r($arrayName) other wise we need to  run a loop to see all the elements of an Array
echo "<br> print the array using print_r<br>";
print_r($users);

// We can count the lenght by
$els = "Number of users are " . count($users) . "<br>";
echo $els;
foreach( $users as $user){
    echo "$user <br>";
}

$clients = array("Rahul", "Urvesh", "RK");
// 2D array
// Multidimensional array of users
$users = [
    [
        "name" => "Rahul",
        "city" => "Sidhpur",
        "isLoggedIn" => true,
    ],
    [
        "name" => "Urvesh",
        "city" => "Ahmedabad",
        "isLoggedIn" => false,
    ],
    [
        "name" => "RK",
        "city" => "Surat",
        "isLoggedIn" => true,
    ],
];

// Displaying user details using foreach
echo "User Details:<br>";
foreach ($users as $user) {
    echo "Name: " . $user['name'] . "<br>";
    echo "City: " . $user['city'] . "<br>";
    echo "Logged In: " . ($user['isLoggedIn'] ? 'true' : 'false') . "<br>";
    echo "--------------------------<br>";
}

// Associative array
// Key must be inside the ""
$userDetails = [
    "name" => "Rahul",
    "isLoggedIn" => false,
    "City" => "Sidhpur",
];

// How can we access element then??
// This is how we can access the element inside the Array.
echo $userDetails['name'];

// How can we do looping over here then
echo "<br>Print by foreach of associative array<br>";
foreach($userDetails as $value){
    echo "$value <br>";
}

// We can also display the keys
echo "<br>Print by foreach for key values<br>";
foreach($userDetails as $keys => $value){
    echo " $keys => $value <br>";
}

// 2D associative Array
$products = [
    'PRD001' => [
        'name' => 'Laptop',
        'price' => 75000,
        'stock' => 10
    ],
    'PRD002' => [
        'name' => 'Smartphone',
        'price' => 45000,
        'stock' => 20
    ],
    'PRD003' => [
        'name' => 'Headphones',
        'price' => 3000,
        'stock' => 50
    ],
    'PRD004' => [
        'name' => 'Keyboard',
        'price' => 1500,
        'stock' => 25
    ]
];

// If we want to display all the values then should write 2D loop
echo "products array: <br>";
foreach ($products as $product) {
    echo $product['name'] . "<br>";
}


// ***********************  In-Build functions of array 
$newArray = ["R", "RK", "RKR"];
// Add element at the last
echo "<br> adding the element <br>";
array_push($newArray, "RKRK");
print_r($newArray);

// remove element from the last
echo "<br> removing the element <br>";
array_pop($newArray);
print_r($newArray);

// remove the last 2 from the array
array_splice($newArray, -2);
?>