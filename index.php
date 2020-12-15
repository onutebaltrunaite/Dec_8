<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


$string = 'Labas labas labas';
$int = 12;
$bool = true;
$null = null;

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

<ul>
    <li><?php print $string; ?></li>
    <li><?php print $int; ?></li>
    <li><?php print $bool; ?></li>
    <li><?php print $null; ?></li>
</ul>

</body>
</html>