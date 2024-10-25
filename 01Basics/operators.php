<?php
//  ******************     Whereever this line, means something new
// Arithmetic Operators
$a = 10;
$b = 5;

// Addition
$sum = $a + $b; // $sum = 15
echo "Addition: $sum\n";

// Subtraction
$diff = $a - $b; // $diff = 5
echo "Subtraction: $diff\n";

// Multiplication
$product = $a * $b; // $product = 50
echo "Multiplication: $product\n";

// Division
$quotient = $a / $b; // $quotient = 2
echo "Division: $quotient\n";

// Modulus
$remainder = $a % $b; 
echo "Modulus: $remainder\n";

// Exponentiation
$power = $a ** $b;
echo "Exponentiation: $power\n\n";

// Assignment Operators
$c = 10;
$c += 5; // $c = 15 (Add and assign)
echo "After += : $c\n";

$c -= 5; // $c = 10 (Subtract and assign)
echo "After -= : $c\n";

$c *= 2; // $c = 20 (Multiply and assign)
echo "After *= : $c\n";

$c /= 4; // $c = 5 (Divide and assign)
echo "After /= : $c\n\n";


// Comparison Operators
$x = 10;
$y = 20;
//  ******************
// Not going to check for the datatypes
$isEqual = ($x == $y); // false
echo "Is Equal: "; var_dump($isEqual);

// Check for the data types
$isIdentical = $x === $y; // false
echo "Is Identical: "; var_dump($isIdentical);

// Not Equal
$isNotEqual = $x != $y; // true
echo "Is Not Equal: "; var_dump($isNotEqual);

// Greater than
$isGreater = $x > $y; // false
echo "Is Greater than: "; var_dump($isGreater);

// *****************
// Spaceship (Three-way comparison)
// $x < $y: returns -1
// $x == $y: returns 0
// $x > $y: returns 1
$compare = $x <=> $y; // -1 (x is less than y)
echo "Spaceship result: $compare";

// Logical Operators
$bool1 = true;
$bool2 = false;

// And
$andResult = $bool1 && $bool2; // false
echo "Logical AND: "; var_dump($andResult);

// Or
$orResult = $bool1 || $bool2; // true
echo "Logical OR: "; var_dump($orResult);

// Not
$notResult = !$bool1; // false
echo "Logical NOT: "; var_dump($notResult);

echo "\n";

// Increment/Decrement Operators
$val = 5;

// Pre-increment
echo "Pre-increment: " . ++$val . "\n"; // 6

// Post-increment
echo "Post-increment: " . $val++ . "\n"; // 6
echo "After Post-increment: $val\n"; // 7

// Pre-decrement
echo "Pre-decrement: " . --$val . "\n"; // 6

// Post-decrement
echo "Post-decrement: " . $val-- . "\n"; // 6
echo "After Post-decrement: $val\n\n"; // 5

// String Operators
$str1 = "Hello";
$str2 = " World";

//  ******************
// Concatenation
$concat = $str1 . $str2; // "Hello World"
echo "String Concatenation: $concat\n";

// Concatenation assignment
$str1 .= " PHP"; // "Hello PHP"
echo "Concatenation Assignment: $str1\n\n";

// Array Operators
$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("b" => "blueberry", "c" => "cherry");

//  ******************
// Union
$arrayUnion = $array1 + $array2; // Combines arrays, but keeps the value of the first array for duplicate keys
echo "Array Union:\n";
print_r($arrayUnion);

//  ******************
// Equality
$arrayEqual = $array1 == $array2; // false (arrays have different values)
echo "Array Equality: "; var_dump($arrayEqual);

//  ******************
// Identity
$arrayIdentical = $array1 === $array2; // false (arrays have different values and/or order)
echo "Array Identity: "; var_dump($arrayIdentical);

echo "\n";


// Bitwise Operators
$bitwise1 = 6;  // 110 in binary
$bitwise2 = 3;  // 011 in binary

// AND
$bitwiseAnd = $bitwise1 & $bitwise2; // 010 = 2
echo "Bitwise AND: $bitwiseAnd\n";

// OR
$bitwiseOr = $bitwise1 | $bitwise2; // 111 = 7
echo "Bitwise OR: $bitwiseOr\n";

// XOR
$bitwiseXor = $bitwise1 ^ $bitwise2; // 101 = 5
echo "Bitwise XOR: $bitwiseXor\n";

// Left shift
$leftShift = $bitwise1 << 1; // 1100 = 12
echo "Left Shift: $leftShift\n";

// Right shift
$rightShift = $bitwise1 >> 1; // 011 = 3
echo "Right Shift: $rightShift\n\n";

//  ******************
// Null Coalescing Operator
$nullVar = null;
$default = $nullVar ?? 'Default Value'; // Returns 'Default Value' because $nullVar is null
echo "Null Coalescing: $default\n\n";

// One more example
$pageTitle = $pageData['title'] ?? 'Untitled Page';

// one more example
$deliveryAddress = $userProfile['address'] ?? 'Default Address, City, Country';

// Type Operator
class MyClass {}
$obj = new MyClass();

// *************
// instanceof
$isInstance = $obj instanceof MyClass; // true
echo "Is Instance of MyClass: "; var_dump($isInstance);

echo "\n";

// *************
// Error Control Operator
@$undefinedVar; // Suppresses errors when accessing undefined variables

// Execution Operator
$output = `echo "This is a shell command!"`;
echo "Shell command output: $output\n";

?>
