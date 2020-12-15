<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

$abuBlogi = null;
$abuGeri = null;


$reiksme = '';

if($grizai_velai){
    if($grizai_isgeres){
        $reiksme = 'Isgeres ir velai'; 
    } else {
        $reiksme = 'Tik velai'; 
    }
} else {
    if($grizai_isgeres){
        $reiksme = 'Tik isgeres';   
    } else {
        $reiksme = 'Nieko nepadarei'; 
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

<h1>Buitine skaiciuokle</h1>

<h2>Situacija: Grizai <?php print $reiksme; ?></h2>

<?php if($reiksme == 'Isgeres ir velai'): ?>
    <h3>Miegosi ant sofos!</h3>
    <img src="https://static.thenounproject.com/png/1273439-200.png" alt="">
<?php else: ?>
    <h3>Nemiegosi ant sofos</h3>
<?php endif; ?>

</body>
</html>