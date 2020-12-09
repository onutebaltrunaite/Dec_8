<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


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

    <?php 

        $vienmatisMasyvas = [
            'color' => 'red',
            'size' => 's',
            'price' => '19.99$',
        ];
        var_dump($vienmatisMasyvas);
        var_dump($vienmatisMasyvas['price']);

        $carShop = [
            'salon1' => [
                'skoda' => [
                    'model' => 'skoda yeti',
                    'years' => '2010',
                    'fuel' => 'dyzelis',
                    'seats' => '6',

                ],
                    'bmw' => [
                        'model' => 'bmw 118d',
                        'years' => '2009',
                        'fuel' => 'dyzelis',
                        'seats' => '6',
                    ],
                ],
            'salon2' => [
                'fiat' => [
                    'model' => 'fiat yeti',
                    'years' => '1991',
                    'fuel' => 'benzas',
                    'seats' => '6',

                ],
                    'bmw' => [
                        'model' => 'bmw kazkoks',
                        'years' => '2020',
                        'fuel' => 'dyzelis',
                        'seats' => '6',
                    ],
                ],
            ];

            var_dump($carShop['salon1']['skoda']);
            var_dump($carShop['salon2']['fiat']['fuel']);

    ?>




</body>
</html>

