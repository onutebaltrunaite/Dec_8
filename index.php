<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


$x = rand(1, 10);

for ($y = 0; $y < $x; $y++){
    // print "tai yra $y ciklas" . '<br>';
    // var_dump("tai yra $y ciklas" . '<br>');
};


for ($y = 0; $y < 12; $y++){
    // print date('F', strtotime('+' . $y . 'month')) . '<br>';
};

$months = 12;
$wallet = 1000;
$month_icome = 700;
$month_expenses = 0;

for ($x = 0; $x < $months; $x++){
    $wallet += $month_icome;
    $month_expenses = rand(100, 500);
    $wallet -= $month_expenses;
};



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

<h1>Wallet Forecast</h1>
<h2><?php print 'Po ' . $months . ' menesiu ' . 'prognozuojamas likutis: ' . $wallet; ?></h2>



</body>
</html>