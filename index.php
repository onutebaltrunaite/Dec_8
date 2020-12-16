<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


$kates = rand(1, 3);
$sunys = rand(1, 3);
// $pavyko = rand(0, 1);
$katasuniai = 0;


for ($y = 0; $y < $sunys; $y++) {
    for ($x = 0; $x < $kates; $x++){
        $pavyko = rand(0, 1);
        var_dump($pavyko);
        if($pavyko){
            $katasuniai++;
        }
    } 
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

<h1>Katasuniu iseiga</h1>

<h2>Dalyvavo <?php print $kates; ?> kates ir <?php print $sunys; ?> sunys.</h2>

<h3>Katasuniu iseiga <?php print $katasuniai; ?></h3>













</body>
</html>