<?php
$num = rand(0,23);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p> <?php 
            if ($num < 12){
                echo "☀️". $num;
            } else if ($num >= 12) {
                echo "🌑" . $num;
            } 
        ?>
    </p>
</body>
</html>