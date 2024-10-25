<?php
// Function which take the 2D array and give the total from it
// We can also pass the  default paramter over here if we want
function calculateCartTotal($cartItems) {
    $total = 0;
    foreach ($cartItems as $item) {
        $price = $item['price']; // Price of the item
        $quantity = $item['quantity']; // Quantity of the item
        // Calculate total price for this item
        $total += $price * $quantity;
    }

    return $total;
}

// 2D array // We gonna take it JSON over here when we do code into the backend
// When req comes from somewhere else
$cartItems = [
    ['name' => 'T-Shirt', 'price' => 19.99, 'quantity' => 2],
    ['name' => 'Jeans', 'price' => 39.99, 'quantity' => 1],
    ['name' => 'Shoes', 'price' => 49.99, 'quantity' => 1],
];

$totalPrice = calculateCartTotal($cartItems);
// Number format is for checking the decimal we want to round off
echo "Total Price: $" . number_format($totalPrice, 2); // Output: Total Price: $129.97



// Function is for giving the discounts to the cutomer in ecommerece
// We pass the total price over here and the dicuount which we wants to give in interger
function applyDiscount($totalPrice, $discountPercentage) {

    // check if its between 0 to 100
    if ($discountPercentage < 0 || $discountPercentage > 100) {
        return $totalPrice; // No discount applied
    }

    // Calculate discount amount
    $discountAmount = ($totalPrice * $discountPercentage) / 100;

    // Return the final price after discount
    return $totalPrice - $discountAmount;
}

$discountPercentage = 10; // 10% discount
$finalPrice = applyDiscount($totalPrice, $discountPercentage);
echo "Final Price after Discount: $" . number_format($finalPrice, 2); // Output: Final Price after Discount: $116.97


// Just like javascript we also have Function with a default parameter over here it user pass nothingg then the paramtre would be given
function greet($name = "Guest") {
    return "Hello, " . $name . "!";
}

// Calling the function without an argument
echo greet(); // Output: Hello, Guest!

// Calling the function with an argument
echo greet("Rahul"); // Output: Hello, Rahul!


// Some of the in-build function of php
$var = "abc";
echo is_string($var);

$varOne = "abc";
var_dump($varOne);
// We also have rand for the random number


// The below is used for debugging and all
// Now we want after the before we want to stop the execution of the code
echo "before";
    // die();
    // We also have exit
    // exit();
    // The below code not going to execute
echo "after"
?>