<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');



$months = 24;
$car_price_new = 30000;
$depreciation = 2;

$car_price_used = $car_price_new;


for($x = 0; $x < $months; $x++){
    $car_price_used -= $car_price_used * $depreciation / 100;
}
$depr_perc = 100 - ($car_price_used * 100 / $car_price_new);

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

<h1>Kiek nuvertes masina?</h1>
<h2>Naujos masinos kaina: <?php print $car_price_new; ?></h2>
<h3>Po <?php print $months; ?> men., masinos verte bus: <?php print round($car_price_used); ?> eur.</h3>
<h4>Masina nuvertes <?php print round($depr_perc);?> proc.</h4>


</body>
</html>