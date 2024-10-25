<?php
// $user = true;
$isLoggedIn = $user ?? 'You are not user';
echo $isLoggedIn. '<br>';
if($isLoggedIn){
    echo 'You can post the picutres';
} else if($isLoggedIn === false){
    echo 'Please login First';
} else{
    echo 'Something went wrong';
}

// Another User Role-Based Access Control
$userRole = "editor";
if ($userRole === "admin") {
    echo "You have full access.\n";
} elseif ($userRole === "editor") {
    echo "You have edit access only.\n";
} else {
    echo "You have limited access.\n";
}

// 3. SWITCH Statement: Content Management System (CMS) Navigation
$page = "about";
switch ($page) {
    case "home":
        echo "You are on the homepage.\n";
        break;
    case "about":
        echo "You are on the about page.\n";
        break;
    case "contact":
        echo "You are on the contact page.\n";
        break;
    default:
        echo "Page not found.\n";
}

// We also have Ternary Operator over here like javascript
// 4. Ternary Operator: Shopping Cart Discount
$cartTotal = 150;
$discount = $cartTotal > 100 ? 20 : 0;
echo "Discount applied: $discount\n";

// 5. Null Coalescing Operator
$apiResponse = null;
$result = $apiResponse ?? "No data available";
echo "API Result: $result\n";

// 6. Short-Circuit Logical Operators
$hasWritePermission = false;
$isAdmin = true;
if ($isAdmin || $hasWritePermission) {
    echo "You can write to this page.\n";
} else {
    echo "You don't have permission to write to this page.\n";
}

// 7. AND/OR Logical Operators
$username = "rahul";
$password = "secret";
if ($username !== "" && $password !== "") {
    echo "Form submission is valid.\n";
} else {
    echo "Please fill in all the required fields.\n";
}

// 8. GOTO
$error = false;
if ($error) {
    goto error_handling;
}
echo "Operation successful.\n";

error_handling:
echo "An error occurred, please try again later.\n";

// 9. SWITCH for Error Codes: API Error Handling
$errorCode = 404;
switch ($errorCode) {
    case 200:
        echo "Success: Operation completed successfully.\n";
        break;
    case 400:
        echo "Error 400: Bad Request.\n";
        break;
    case 404:
        echo "Error 404: Not Found.\n";
        break;
    case 500:
        echo "Error 500: Internal Server Error.\n";
        break;
    default:
        echo "Unknown error occurred.\n";
}

// 10. IF with isset(): Checking if POST Data Exists
$_POST['email'] = 'example@domain.com'; // Simulated form data
if (isset($_POST['email'])) {
    echo "Email is provided: " . $_POST['email'] . "\n";
} else {
    echo "Email is missing.\n";
}

// 11. Using empty()
$inputField = "";
if (empty($inputField)) {
    echo "The input field is empty.\n";
} else {
    echo "The input field has data.\n";
}

// 12. IF-ELSE with Array Search
$productCatalog = ["Laptop", "Phone", "Tablet"];
$searchProduct = "Phone";
if (in_array($searchProduct, $productCatalog)) {
    echo "$searchProduct is available in the catalog.\n";
} else {
    echo "$searchProduct is not available in the catalog.\n";
}
?>



