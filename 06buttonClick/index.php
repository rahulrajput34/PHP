<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call PHP function on click</title>
</head>
<body>
    <form action="" method="post">
        <button name="button_name" value="btn1">
            Call Function
        </button>   
    </form>
</body>
</html>
<?php
// This isset checks wether your req come or not
// Check it have button in request or not in the post
// isset() checks whether $_POST['button_name'] exists and is not NULL. 
// If the button was not pressed, the condition will evaluate to false, and the code block will not execute. This prevents the undefined index notice from occurring.

// Just remember its better to use isset in place of not use it
if(isset($_POST['button_name'])){
    btnClickTest();
}

function btnClickTest(){
    echo "Function called on button click";
}

// in pure php we can not able to give onclick event direct into html like in JavaScript we did
// we must go through this process and give the click to it
?>