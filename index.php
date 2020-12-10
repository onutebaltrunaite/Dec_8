<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


$stringas = 'sudas kazkokie zodziai rupuze kazkokie rupuze zodziai ir vel rupuze';
$keiksmazodis = ['rupuze', 'sudas'];


$kintamieji = ['kompiuteris', -235, '1.235eght', 123.45, 567.6, 'dar kazkas 123', 'kazkas'];

$floatReiksmes = [];
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



    <?php print (str_replace($keiksmazodis,"***",$stringas)); ?>


    <!-- <div><?php print($item) ?></div> -->

    <?php foreach($kintamieji as $item){
        if (is_float($item)){
            $floatReiksmes[] = floatval($item);
        }
    } ?>

    <?php var_dump($floatReiksmes); ?>
    <?php print_r($floatReiksmes); ?>




    <?php  
    $zodziai = 'reikia parasyti bent desimt zodziu reikia parasyti bent desimt zodziu';
    $suskaidytas = explode(" ", $zodziai);
    print_r($suskaidytas);
    ?>

</body>
</html>

<!-- //1. Sukurkite masyva su betkokiais kintamaisiais. Kintamuju turi buti ne maziau nei 10.
//2. Sukurkite nauja masyva kuris tures tik float reiksmes perimtas is pirmojo masyvo.
//3. Atvaizduokite reiksmes skirtingose eilutese.
//Panaudoti is_float -->


<!-- //1. Sukurkite kintamaji is 10 zodziu.
//2. Sio kintamojo zodzius sudeliokite i masyva.
//3. Masyve esancius zodzius atvaizduoti ekrane visomis didziosiomis raidemis.
//Panaudoti explode, strtoupper
//1. Sukurti masyva is 10 atsitiktiniu skaiciu nuo 0 iki 100.
//2. Patikrinti masyve esancias reiksmes ar jos yra lygines ir jei jos lygines visas jas sudejus atvaizduoti
//ekrane.
//Panaudojant %
// 1. Sukurkite funkcija, kuri priimtu viena argumenta - $tekst ir tekste pakeistu smail`us (:-), :-D, :-(, ir tt.) i paveiksliukus.
//Galima pasinaudoti: https://www.pic4ever.com/ (str_replace pades)//Panaudoti str_replace
// 1. Sukurkite salyga kuri priimtu viena parametra $text ir grazintu teksta.
//Jeigu tekstas yra ilgesnis negu 100 simboliu, tekstas turetu buti apkirptas is desines ir prideti trys taskai (...).
//Grazinto teksto ilgis turi nevirsyti 100 simboliu kartu su taskais.
//Panaudoti mb_strlen ir mb_substr
//2. Papildykite 1 uzduoti taip, kad tekstas nebutu nukirptas ties zodzio vidurio o ties tarpu.
////Grazinto teksto ilgis gali buti mazesnis uz 100 simboliu, bet svarbiausia ne didesnis.
/// Panaudoti mb_strlen, mb_substr, mb_strrpos, -->