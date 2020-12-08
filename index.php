<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');

 $string = 'Labas krabas';
 $int = 45;
 $bool = true; 
 $null = null;
 $img = 'images/bomb.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Title </title>
<style>
</style>

</head>

</head>
<body>

<ul>
    <li><?php print $string; ?></li>
    <li><?php print $int; ?></li>
    <li><?php print $bool; ?></li>
    <li><?php print $null; ?></li>
</ul>

    <img src="<?php print $img; ?>" alt="">
    <img src="<?php print $img; ?>" alt="">
    <img src="<?php print $img; ?>" alt="">
    <img src="<?php print $img; ?>" alt="">





</body>
</html>

