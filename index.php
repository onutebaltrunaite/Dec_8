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
    <title>PHP lydės ir <?php print date('Y:m:d', strtotime('+1 day')) ?></title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1><b>Vardas</b>- PHP su manim buvo ir <?php print date('H', strtotime('-1 hour')) . ' valandą!'; ?> </h1>
    <p><?php print date('Y', strtotime('+1 year')); ?> ne už kalnų!</p>





</body>
</html>