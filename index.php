<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');

$distance = rand(1, 50000); //km
$speed_light = 300000;      // m/s
$speed_sound = 333;         // m/s

$delay = ($distance * 1000 / $speed_sound) - ($distance * 1000 / $speed_light);
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

</style>

<body>

<h1>Garsas VS Sviesos</h1>
<ul>
    <li><?php print 'Eksperimento distancija: ' . $distance; ?> </li>
    <li><?php print 'Garsas nuo sviesos atsiliks sekundemis: ' . $delay; ?> </li>
</ul>



</body>
</html>