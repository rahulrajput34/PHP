<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $hero = "spiderman";
            $isWatched = true;
            
            if($isWatched) {
                $message = "You read the $hero";
            } else {
                $message = "You have not read $hero";
            };
        ?>
    <h1>
        <?php
            echo $message;
        ?>
        <!-- without  the echo keyword -->
        <?= $message ?>
    </h1>
</body>
</html>