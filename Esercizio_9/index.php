
<?php
$isOnline = true;
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
            if ($isOnline == true){
                echo '<p style="color: green;">Utente Online</p>';
            } else {
                echo '<p style="color: red;">Utente Offline</p>';
            } 
        ?>
    </p>
</body>
</html>