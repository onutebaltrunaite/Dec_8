<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');

$fiji = 'https://images-na.ssl-images-amazon.com/images/I/71xv3sXmr7L._SL1500_.jpg';
$fijiBox = 'https://cdn.shopify.com/s/files/1/0051/7262/5477/products/fiji-bottle-1000ml-shipper-bottle-2x_900x900.png?v=1569981132';

$monthSum = 0;




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
        
        for ($week = 0; $week < 4; $week++ ){
            // var_dump($week);
            $monday = rand(0, 5);
            $thuesday = rand(0, 5);
            $wednesday = rand(0, 5);
            $thursday = rand(3, 7);
            $friday = rand(5, 15);
            $saturday = rand(2, 4);
            $sunday = rand(0, 2);

            $sum[$week] = $monday + $thuesday + $wednesday + $thursday + $friday + $saturday + $sunday;
            // var_dump($sum[$week]);

            $monthSum += $sum[$week];
        }
        print 'Per menesi isgerta ' . $monthSum . '<br>';
        $leftovers = ($monthSum % 12);
        print 'Liekana buteliuku' . $leftovers . '<br>';

        // $boxes = intdiv($monthSum, 12);
        // print $boxes;
        $boxes = ($monthSum - $leftovers)/12 ;
        print 'Is viso deziu ' . $boxes . '<br>';

        // $fijiLoose = $monthSum - ($boxes * 12);
        

        for ($x = 0; $x < $boxes; $x++) {
            print "<img src ='$fijiBox'>";
        }
        for ($x = 0; $x < $leftovers; $x++) {
            print "<img src ='$fiji'>";
        }

    ?>




</body>
</html>

