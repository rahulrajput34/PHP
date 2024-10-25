<?php
// TypeCasting in PHP
$a = "20000";
var_dump($a);

$num = (int) $a;
var_dump($num);
// In below case its not gonna works because we can not change the string into the number
// $nonNumericString = "Hello, World!";
// $number = (int)$nonNumericString; 
// echo $number;
echo "<br> Print from conveting Array <br>";
$arr = (array) $a;
print_r($arr);
var_dump($arr);

echo "<br> Print from coveting object <br>";
$obj = (object) $a;
print_r($obj);
var_dump($obj);


// DataTypes in PHP
// 1. String
// We donot have collection datatype inside the php
$name = "John";
echo "My name is $name <br>";
// Function to check the all the details of the varibales 
echo var_dump($name) . "<br>";

// 2. Integer
$age = 25;
echo var_dump($age) ."<br>";   
echo "I am $age years old <br>";

// 3. float
$height = 5.6;
echo "I am $height feet tall <br>";

// 4.boolean
$isStudent = true;
echo "Am I a student? $isStudent <br>";

// 5. Array
$fruits = array("apple", "banana", "orange", true, null, 39);
// Another way of decalring an array
$arr = ["apple", "banana", "orange"];
// Way to declare empty array
$emptyArray = [];
// another way to delcare empty array
$emptyArray = array();
echo var_dump($fruits) . "<br>";
// How can I delare the array of elemenet five

echo "I like $fruits[0] <br>";

// 6. Object
// Define a car class in PHP
class Car {
    public $make;
    public $model;
    public $year;
    public $color;

    function __construct($make, $model, $year, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    function start() {
        echo "The car has started.<br>";
    }

    function drive() {
        echo "The car is driving.<br>";
    }
}

$car = new Car("Toyota", "Corolla", 2020, "blue");

// Accessing properties
echo "Make: " . $car->make . "<br>";  
echo "Year: " . $car->year . "<br>";

// Calling methods
$car->start(); 
$car->drive();


// 7. Null
$car = null;
echo "I own a $car <br>";

// 8. Resource
// // holds references to external resources such as database connections, file handles, or streams
// $connection = ftp_connect("127.0.0.1") or die("Cannot connect to FTP server");
// echo var_dump($connection) . "<br>";
?>