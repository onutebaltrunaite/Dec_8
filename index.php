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
    <title>PHP lydės ir <?php print date('Y', strtotime('+' . rand(0, 10) . 'year')); ?></title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Vardas - galbūt turėsiu <?php print rand(0, 5); ?> vaikų! </h1>

    <p>D. Trump'as nebebus prezidentu: <?php print date('Y:m:d', strtotime('+' . rand(2, 10) . 'years')); ?></p>





</body>
</html>