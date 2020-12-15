<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');



$days = 365;
$cigs_mon_fri = rand(3, 4);
$cigs_sat = rand(10, 20);
$cigs_sun = rand(1, 3);
$pack_price = 3.50;
$time_per_cig = 5; //5min


$sum = 0;
$price = 0;

$sumasuma = 0;
$price2 = 0;

for ($week = 1; $week <= 52; $week++){
    $monday = rand(3, 4);
    $thuesday = rand(3, 4);
    $wednesday = rand(3, 4);
    $thursday = rand(3, 4);
    $friday = rand(3, 4);
    $saturday = rand(10, 20);
    $sunday = rand(1, 3);  

    $week_sum = $monday + $thuesday + $wednesday + $thursday + $friday + $saturday + $sunday;

    $sum += $week_sum;

    $weeksumasuma = $monday + $thuesday + $wednesday + $thursday + $friday;

    $sumasuma += $weeksumasuma;
}

$price = ceil($sum/10) * $pack_price;
$price2 = ceil($sumasuma/10) * $pack_price;

$cizai = ceil($sum/10);

$total = round($sum * $time_per_cig / 60);



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
.cizas {
    background-image: url('images/cizas.jpg')
}
</style>

<body>

<h1>Mano dumu sskaiciuokle</h1>
<h2>Per <?php print $days; ?> dienas, surukysiu <?php print $sum; ?> cigareciu uz <?php print $price; ?> eur.</h2>

<h3>Nerukydamas darbo dienomis sutaupyciau <?php print $price2; ?> eur.</h3>

<h3>Viso traukdamas kiekviena diena prastovesiu valandu <?php print $total;?></h3>

<div style="display: flex; flex-wrap: wrap;">
    <?php for ($x = 1; $x <= $cizai; $x++): ?>
        <div style="height: 50px; width: 50px; background-size: cover; margin: 5px; border: 1px solid black; padding: 5px;" class="cizas"></div>
    <?php endfor; ?>
</div>

</body>
</html>