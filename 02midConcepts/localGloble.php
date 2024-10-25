<?php
// Local variable: when we create the function and create a variable inside it, it becomes local to that particular function; we cannot access it outside the function

// Global variable means we can access it anywhere inside the whole program

// Variable hoisting
// echo $num; // it would be undefined, but here in PHP we do not have the type undefined; then it would be thrown an error
$num = 10;

// Function hoisting
// we can do this call over here; means just like JS, we also have the concept of hoisting over here
// addOne();

function addOne(){
    // Here it's gonna say num is not defined; we must give global keyword or pass it as a parameter
    // echo $num;
    global $num;
    echo $num++;
    function addOneMore(){
        global $num;
        echo $num;
    };
};

addOne();
addOneMore();
?>
