<?php
$orario = rand(0,23);
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
            if ($orario< 12){
                echo "☀️". $orario;
            } else if ($orario >= 12) {
                echo "🌑" . $orario;
            } 
        ?>
    </p>
</body>
</html>