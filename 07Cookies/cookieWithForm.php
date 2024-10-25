<form action="" method="post">
    <input type="text" name="user" placeholder = "Enter user name">
    <br>
    <br>
    <button name="button_name" value="set">Set Cookies</button>
    <br>
    <br>
    <button name="button_name" value="display">display Cookies</button>
    <br>
    <br>
    <button name="button_name" value="delete">Delete Cookies</button>
</form>

<?php
// If post req, then need to work
if(isset($_POST['button_name'])){
    // if the button with set value pressed
    if($_POST['button_name'] === "set"){
        // This  is what is given by the user
        $val = $_POST['user'];
        echo $val;
        setcookie("user", $val, time()+(86400));
        echo "<br> Cookie is set successfully";
    }
    // if the button with display value pressed
    if($_POST['button_name'] === "display"){
        // If cookie is present
        if (isset($_COOKIE['user'])) {
            // print the cookie
            echo "<br>Cookies has been displayed successfully <br>";
            echo $_COOKIE['user'];
        }
    }
    // if the button with delete is pressed
    if($_POST['button_name'] === "delete"){
        if (isset($_COOKIE['user'])) {
            echo "<br>Cookies has been delete successfully <br>";
            // delete the cookie
            setcookie("user", null, -1);
        }
    }
}

?>

