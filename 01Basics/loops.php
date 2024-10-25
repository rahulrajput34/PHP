<?php
// Number of products per page
$products_per_page = 10;
$total_products = 50; // Assume 50 products total
$total_pages = ceil($total_products / $products_per_page);
echo "The devide is ".$total_pages."<br>";

// display the anchor of  the page
for ($page = 1; $page <= $total_pages; $page++) {
    // echo "<a href='products.php?page=$page'>Page $page</a> ";s
}


// Simple for loop
$scores = [10, 20, 30, 40, 50];
$totalScore = 0;
for ($i = 0; $i < count($scores); $i++) {
    $totalScore += $scores[$i];
}
echo "Total Score: $totalScore <br>"; // Output: Total Score: 150



// The logic of the password
// $correctPassword = "secret";
// $attempts = 0;
// // to giving the three try of attempting a password
// while ($attempts < 3) {
//     $inputPassword = readline("Enter your password: ");
//     if ($inputPassword === $correctPassword) {
//         echo "Login successful!";
//         break;
//     } else {
//         $attempts++;
//         echo "Incorrect password. Try again.\n";
//     }
// }

// if ($attempts === 3) {
//     echo "Too many attempts. Access denied.";
// }




// Do while loop with swich cases
// do {
//     echo "Menu:\n";
//     echo "1. Option 1\n";
//     echo "2. Option 2\n";
//     echo "3. Exit\n";
//     $choice = readline("Select an option: ");
//     switch ($choice) {
//         case 1:
//             echo "You selected Option 1.\n";
//             break;
//         case 2:
//             echo "You selected Option 2.\n";
//             break;
//         case 3:
//             echo "Exiting...\n";
//             break;
//         default:
//             echo "Invalid option. Please try again.\n";
//     }
// } while ($choice != 3);


// *****************************************
// Two important keywords break and continue
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        break; // Exit the loop when $i is 5
    }
    echo $i . " "; // Output: 1 2 3 4 
}

for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        continue; // Skip the iteration when $i is 5
    }
    echo $i . " "; // Output: 1 2 3 4 6 7 8 9 10
}


// One more keyword to consider in the PHP
// When its come to the jump then it would be directoly go to the jump and the code amoung them is not going to executes 
$x = 300;
echo "Before condition <br>";

if($x == 300){
    goto jump;
}
// The below Rahul is not going to executes because we passed the jump keyword over there
$name = "Rahul";
echo $name;

jump:
echo "Statement is on line number 99"


// The real use of goto
// But we are use try catch for do goto but yes its useful  in some cases
$file = fopen("data.txt", "r");
if (!$file) {
    goto error; // Jump to error handling if the file cannot be opened
}

// Processing the file
// ...

fclose($file);
goto end;

error:
echo "Error opening the file.";

end:


// Enhanced for loop
$orders = [
    [
        'order_id' => 1001,
        'customer_name' => 'Rahul Rajput',
        'items' => ['Laptop', 'Headphones'],
        'total_price' => 12000
    ],
    [
        'order_id' => 1002,
        'customer_name' => 'Anjali Sharma',
        'items' => ['Mobile Phone'],
        'total_price' => 8000
    ],
    [
        'order_id' => 1003,
        'customer_name' => 'John Doe',
        'items' => ['Tablet', 'Keyboard'],
        'total_price' => 15000
    ]
];

// Define discount rate
$discountRate = 0.10; // 10%

// Enhanced foreach loop to apply discount
foreach ($orders as &$order) {
    if ($order['total_price'] > 10000) {
        // Apply discount
        $originalPrice = $order['total_price'];
        $discountAmount = $originalPrice * $discountRate;
        $order['total_price'] = $originalPrice - $discountAmount;
        // Log the discount
        echo "Order ID: {$order['order_id']} - Discount Applied. Original Price: {$originalPrice} INR, New Price: {$order['total_price']} INR.\n";
    } else {
        echo "Order ID: {$order['order_id']} - No Discount Applied. Total Price: {$order['total_price']} INR.\n";
    }
}
?>
