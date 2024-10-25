<?php
// We can store any data inside the variable like name, number, boolean, array, object, null like Javascript
// Its starts with $
// Case-sensetive in PHP
$name = "First in Varibale";
echo $name;
$Name = "I am also declared in Variable";
echo $name." ".$Name;
$name = 20;
echo $name;

// Constant in PHP
// When we declare the variable we can change the value but when we declare the constant we can't change the value
// There are two ways to declare the constant 
// First way to declare the constant
define("constant", "I am Constant");
echo '<h1>'.constant.'</h1>';

// Second way to declare the constant
const constant2 = "I am Constant 2";
echo '<h1>'.constant2.'</h1>';
?>