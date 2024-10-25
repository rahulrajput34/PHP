<?php
// If we try the creating the table it gonna be too much of html code if we have thousand users
// But here inside the  php if we give just value inside the array it gonna add it inside the table
    $users = [
        [1, "Rahul", "rahul@gmail.com"],
        [2, "Urvesh", "urvesh@gmail.com"],
        [3, "Rk", "rk@gmail.com"],
        [4, "Rohan", "rohan@gmail.com"],
        [5, "Mahi", "mahi@gmail.com"],
    ];

    echo "<table border='1'>";
    foreach($users as $user){
        echo "<tr>";
        for ($i=0; $i < count($user); $i++) { 
            echo "<td>";
            echo $user[$i];
            echo "</td>";
        };
        echo "</tr>";
    };
    echo "</table>";
?>