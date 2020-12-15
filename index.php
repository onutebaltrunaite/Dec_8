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
<body style="background-color: rgb(<?php print rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255); ?>);">

    <h1 style="font-size: <?php print rand(15, 55); ?>px;">Aš keičiu savo dydį!</h1>

    <p style="color: rgb(<?php print rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255); ?>);">Aš keičiu savo spalvą!</p>





</body>
</html>