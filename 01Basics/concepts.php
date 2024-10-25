<?php
//****************** Nested function
// Without running the outer function we can not run the inner function
// Why we need to do it??
// Some time we need in the code that if the parent function runs then and only then insider function run that time we do it this logic

// test()  // it works the concept of hoisting like JS
function test(){
    echo "I am testing <br>";
    function apple(){
        echo "Apple function called <br>";
    }
}
test();
apple();

// ************************ Varible function
// its simple means that we can store the function inside the varibale
function testTwo() {
    echo "Test two function called <br>";
}
$val = "testTwo";
$val();


// ********************** callBack function
// We pass the function inside the paramtre of a function

function main($func){
    echo "Main function called <br>";
    // testTwo();  // we can call it
    // But we can pass function varibale  over here
    // If we want just do it like this pass the params and call it like below
    $func();

}
echo "I am called by function params <br>";
main($val);


?>