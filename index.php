<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAVADINIMAS</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
        .container {
            width: 200px;
            height: 200px;
            position: relative;
        }
        .pixel {
            width: 1px;
            height: 1px;
            background-color: black;
            position: absolute;
        }
</style>

<body>

<div class="container">
    <?php for ($x = 0, $y = 0.1 * ($x - 100) ** 2; $x < 200; $x += 0.1, $y = 0.1 * ($x - 100) ** 2): ?>
        <?php if ($y < 200): ?>
            <div class="pixel" style="
                    left: <?php print $x; ?>px;
                    bottom: <?php print $y; ?>px;
                    "></div>
        <?php endif; ?>
    <?php endfor; ?>
</div>




</body>
</html>






