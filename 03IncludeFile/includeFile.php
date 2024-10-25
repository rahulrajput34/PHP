<?php
// How to include the one file into another
// Why we need to include the files?
// Sometime we want to write the same logic in another file that time we write all the logic in one file and include wherever its needed.
// Another benifits is that if our code is large then make it into chunks and then give it  to one folder by include

// This how  we include anotheer file inside the PHP
// include("./index.php");
// echo "<br> I am added by include only";

for ($i=0; $i < 10 ; $i++) { 
    // its include the mutliple time
    include("./index.php");  
    // Some time we do not need to include all the time when the loop runs
    echo "<br> I am added by include_once";
    include_once("./index.php");
}
// If we give the wrong file over here it gonaa give the errors
// When we give wrong path to the include then its is showing the warning message not the error 
// We can hide the warning
// So that is the difference  between the include and require
require("./index.php");

for ($i=0; $i < 10 ; $i++) { 
    // Give errors multiple times
    require("./index.php");
    // It will laod the file onnce if its not loaded then it  will give the error
    require_once("./index.php");
}
?>