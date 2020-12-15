<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


$kas = ['Inspektorius', 'Teroristas', 'Suniukas'];
$kaveikia = ['geria', 'perka', 'buciuoja'];
$ka = ['viski', 'vyno buteli', 'langu valikli'];


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

<h1>Delfi.lt Naujienos</h1>
<h2><?php print $kas[rand(0,2)] . ' ' . $kaveikia[rand(0,2)] . ' ' . $ka[rand(0,2)]; ?></h2>



</body>
</html>