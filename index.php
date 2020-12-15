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
.dice1 {
    background-image: url(images/dice1.png);
    
}
.dice2 {
    background-image: url(images/dice2.png);
}
.dice3 {
    background-image: url(images/dice3.png);
}
.dice4 {
    background-image: url(images/dice4.png);
}
.dice5 {
    background-image: url(images/dice5.png);
}
.dice6 {
    background-image: url(images/dice6.png);
}
</style>

<body>

<div style="height: 200px; width: 200px; background-size: cover;" class="dice<?php print rand(1, 6); ?>"></div>





</body>
</html>