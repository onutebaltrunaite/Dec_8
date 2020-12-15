<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');



$months = 50;
$car_price_new = 30000;
$depreciation = 2;

$car_price_used = $car_price_new;

$santaupos = 15000;
$number = 0;
for($x = 0; $x < $months; $x++){
    if ($santaupos <= $car_price_used){
        $car_price_used -= $car_price_used * $depreciation / 100;  
        $number = $x;
    } else {
    break;
    }
};


// $depr_perc = 100 - ($car_price_used * 100 / $car_price_new);



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


<h3>Masina galesiu nusipirkti po <?php print $number; ?> menesiu, kai jos verte bus: <?php print round($car_price_used); ?> eur.</h3>

</body>
</html>