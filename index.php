<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');

$fiji = 'https://images-na.ssl-images-amazon.com/images/I/71xv3sXmr7L._SL1500_.jpg';

$monday = rand(0, 5);
$thuesday = rand(0, 5);
$wednesday = rand(0, 5);
$thursday = rand(3, 7);
$friday = rand(5, 15);
$saturday = rand(2, 4);
$sunday = rand(0, 2);

$sum = $monday + $thuesday + $wednesday + $thursday + $friday + $saturday + $sunday;
print $sum;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Title </title>
<style>
img {
    width: 200px;
    height: 300px;
}
</style>

</head>

</head>
<body>

    <?php 
        
        for ($x = 0; $x < $sum; $x++ ) {
            print "<img src='$fiji'>" ;
        }

    

    ?>




</body>
</html>

