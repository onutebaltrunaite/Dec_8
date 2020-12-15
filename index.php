<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');

$money = rand(1, 100);
$beer_price = 4.5;
$beers_per_night = rand(1, 15);

$money_left = $money;

$alus = 0;
for ($x = 1; $x <= $beers_per_night; $x++){
    if ($money_left >= $beer_price){
        $money_left -= $beer_price;
        $alus++; 
    } else {
    break;
    }
};

$reiksme = '';

if ($alus >= 10 && $alus < 12 && rand(1, 2) == 1){
    $reiksme = 'Pamete pinigine';
} else {
    $reiksme = 'Nepamete pinigines';  
};


$skaicius = rand(1, 10);

if ($alus >= 12 && $alus < 15){
    if($skaicius == 1 || $skaicius == 2 || $skaicius == 3 ){
        $reiksme = 'Nepamete pinigines';   
    } else {
        $reiksme = 'Pamete pinigine';
    }
};



if ($alus >= 15){
    $reiksme = 'Pamete pinigine';
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

<h1>Studentu penktadienis</h1>
<ul>
    <li><?php print 'Aliosa turejo ' . $money . ' pinigu.'; ?> </li>
    <li><?php print 'Isgere ' . $alus . ' alaus.'; ?> </li> 
    <li><?php print 'Grizinejo namo su ' . $money_left . ' pinigu.'; ?></li>

    <li><?php print $reiksme; ?></li>
</ul> 



</body>
</html>