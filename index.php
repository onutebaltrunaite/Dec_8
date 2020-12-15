<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');

$distance = rand(100, 500); //km
$consumption = 7.5;         // 1/100km
$price_1 = 1.3;             // Eur/1

$fuel_total = $distance / 100 * $consumption;
$price_trip = $fuel_total * $price_1;

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

<h1>Kelionės skaičiuoklė</h1>
<ul>
    <li>Nuvažiuota distancija: <?php print $distance; ?></li>
    <li>Sunaudota <?php print $fuel_total; ?> l. kuro.</li>
    <li>Kaina: <?php print $price_trip; ?> pinigų.</li>
</ul>


</body>
</html>