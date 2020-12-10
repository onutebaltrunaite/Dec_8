<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


$stringas = 'sudas kazkokie zodziai rupuze kazkokie rupuze zodziai ir vel rupuze';
$keiksmazodis = ['rupuze', 'sudas'];

$numbers = [];
$suma = 0;
$smailuTekstas = 'cia yra smailu :-D tektas, reikia pakeisti :-) smailus i paveikslelius :-( bla bla bla';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/42762d49f1.js" crossorigin="anonymous"></script>
    <title> Title </title>
<style>

</style>

</head>

</head>
<body>



    <?php print (str_replace($keiksmazodis,"***",$stringas)); ?>

    



    <?php  
    $zodziai = 'reikia parasyti bent desimt zodziu reikia parasyti bent desimt zodziu';
    $suskaidytas = explode(" ", $zodziai);
    // $didelis = strtoupper($suskaidytas);
    print_r($suskaidytas);
    ?>
    <?php foreach($suskaidytas as $zodis): ?>
    <p><?php print strtoupper($zodis); ?></p>
    <?php endforeach; ?>





    <?php
        for ($x = 0; $x < 10; $x++){
            $numbers[] = rand(0, 100);
        }
        var_dump($numbers);

        foreach ($numbers as $number) {
            if($number % 2 == 0){
                $suma += $number;
            }
        }; 
        print $suma;
    ?>


    

        <!-- NEEEE -->
    <!-- <?php foreach($numbers as $number):?>
    <?php if($number % 2 == 0): ?>
    <p><?php print $number; ?></p>
    <?php endif; ?>
    <?php endforeach; ?> -->



        <!-- NEVEIKS -->
        <!-- <?php foreach ($smailuTekstas as $zod) {
            if($zod == ':-)') {
                $smailuTekstas = str_replace(':-)', '<i class="far fa-smile"></i>', $smailuTekstas);
            }
            if($zod == ':-D') {
                $smailuTekstas = str_replace(':-D', '<i class="fas fa-grin-wink"></i>', $smailuTekstas);
            }
            if($zod == ':-(') {
                $smailuTekstas = str_replace(':-(', '<i class="far fa-frown-open"></i>', $smailuTekstas);
            }
        };
        ?> -->




        <?php 
            $smailuTekstas = str_replace(':-)', '<i class="far fa-smile"></i>', $smailuTekstas);
            $smailuTekstas = str_replace(':-D', '<i class="fas fa-grin-wink"></i>', $smailuTekstas);
            $smailuTekstas = str_replace(':-(', '<i class="far fa-frown-open"></i>', $smailuTekstas);
            print $smailuTekstas;
        ?>
        
    

        
     
    

</body>
</html>





<!-- 
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