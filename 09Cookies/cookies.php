<?php
// time() is current time and we add second to it how much we want to take
// name , value, time
// We can check this generated cookie inside the memory inside the application
setcookie("fruit", "apple", time()+(86400));
setcookie("color", "red", time()+(86400));
// We can access all the available by print $_COOKIE
// print_r($_COOKIE);

// How can we verify if cookie is set or not
// We are cheking by given name
if(isset($_COOKIE['fruit'])){
    echo "The value of current cookie is : ". ($_COOKIE['fruit']);
    // Not cookie set
    // echo "The value of current cookie is : ". ($_COOKIE['hehe']);
} else{
    echo "No fruit cookie set";
}

echo "<br>";
// we can generate multiple cookies as well
// When we first go to website then it would just generate cookie then we refresh the page again then it would show the cookie becuae first time its generate and second time its shown
if(isset($_COOKIE['color'])){
    echo "The value of current cookie is : ". ($_COOKIE['color']);
    // Not cookie set
    // echo "The value of current cookie is : ". ($_COOKIE['hehe']);
} else{
    echo "No color cookie set";
}
// We can remove this cookie from direct, the memory inside the application and delete it
echo "<br> <br>";
print_r($_COOKIE);
?>