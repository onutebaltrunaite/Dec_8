<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//1. Sukurkite 29 dienu masyva panaudojant for cikla. Kiekvienoje dienoje turi
// buti 'Name' => '1-dienis', '29-dienis' ir uzimtumas random vertinant nuo 0(laisva) iki 5(uzimtas)

$masyvas = [];
for ($x = 1; $x < 30; $x++){
    $masyvas[] = [
        'name' => "$x - dienis",
        'workload' => rand(0, 5)
    ];

};
// var_dump($masyvas);

//2. Parasyti if kuris tikrintu ar 10 diena yra laisva, jei taip - ekrane raudona spalva, panaudojus
//h1 taga atvaizduoti 'Tau siandiena laisva'.
$reiksme = '';

if ($masyvas[9]['workload'] == 0) {
    $reiksme = 'Tau siandien laisva diena';
};

//3. Parasyti cikla kuris tikrintu visa musu masyva ir priklausomai nuo to ar masyve
// yra daugiau nei 3 laisvos dienos atvaizduoti ekrane h3 tage melyna spalva 'Atostogos'.

$number = 0;
foreach ($masyvas as $key => $value) {
    if($value['workload'] == 0){
        $number++ ;
    }
};

$saldainiai = [
    'sveriami' => [
        'sokoladiniai' => [
            [
                'name' => 'Migle',
                'price' => 9,
            ],
            [
                'name' => 'Kauke',
                'price' => 7,
            ],
        ],
        'ledinukai' => [
            [
                'name' => 'Bibi',
                'price' => 3.4,
            ],
            [
                'name' => 'Ledainis',
                'price' => 3,
            ],
        ],
    ],
    'batoneliai' => [
        'sokoladiniai' => [
            [
                'name' => 'HemaToGen',
                'price' => 1,
            ],
            [
                'name' => 'Mars',
                'price' => 0.2,
            ],
        ],
        'aviziniai' => [
            [
                'name' => 'Corny',
                'price' => 1.2,
            ],
            [
                'name' => 'Belvita',
                'price' => 0.83,
            ],
        ],
    ],
];

// Isprintinkite ekrane be cikolo 'Kauke' saldiniu kaina.
// Isprintinkite ekrane be ciklo 'Mars'.

print $saldainiai['sveriami']['sokoladiniai']['1']['price'] . "<br>"; 
print $saldainiai['batoneliai']['sokoladiniai']['1']['name']. "<br>";

//5. isprintinkite ekrane visu aviziniu batoneliu 'name'.

foreach ($saldainiai['batoneliai']['aviziniai'] as $value) {
    print $value['name']. "<br>";
};
//6. isprintinkite ekrane visus ledinukus su ju 'name' ir 'price'
foreach ($saldainiai['sveriami']['ledinukai'] as $value) {
    print $value['name'] . ' ' . $value['price']. "<br>";
};
//7. sukurkite koda kuris tikrintu masyve esancias saldainiu kainas ir tiek kiek kainu yra
//float tipo tiek atvaizduokite ekrane '*'.
foreach ($saldainiai as $key => $value) {
    foreach ($value as $smth) {
        foreach ($smth as $item) {
            if (is_float($item['price'])){
                print '*';
            }
        }
    };
    
};
//8.Patikrinti ar masyve egzistuoja batonelis 'Mars' jei taip atvaizduokite ekrane
// batonelio pavadinima h3 tage, kaina h2 tage. 
$pavadinimas = '';
$kaina = '';
 
foreach($saldainiai as $rusis){
    foreach($rusis as $rusis2){
        foreach($rusis2 as $value){
            if(in_array('Mars', $value)){
                $pavadinimas = $value['name'];
                $kaina = $value['price'];
            }
        }
    }
};

//9. panaudojus php funkcija suskaiciuoti visus batonelius ir gauta rezultata isvesti i ekrana.
$batoneliuSkaicius = 0;

var_dump(count($saldainiai['batoneliai']));

foreach ($saldainiai['batoneliai'] as $value) {
    $batoneliuSkaicius += count($value);
};
var_dump($batoneliuSkaicius);

//10. Patikrinti ar masyve turime preke kurios pavadinima 'name' sudarytu 8 simboliai. Jei taip -
//ekrane ji atvaizduoti, tik pavadinima.

foreach ($saldainiai as $saldumynas) {
    foreach ($saldumynas as $item) {
        
        foreach ($item as $saldainis) {
            // var_dump(strlen($saldainis['name']));
            
            if (strlen($saldainis['name']) == 8) {
                print $saldainis['name'] . ' cia tas paaskutinis';
            }
        }
    }
};

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- 1.2 uzduotis -->
    <h1 class="red"><?php print $reiksme; ?></h1>

    <!-- 1.3 uzduotis -->
    <?php if($number >= 3): ?>   
        <h3 class="blue">Atostogos</h3>
    <?php endif; ?>

    <!-- 1.8 uzduotis -->

    <h3>Batonelio pavadinimas - <?php print $pavadinimas?></h3>
    <h2>Batonelio kaina - <?php print $kaina . '€'?></h2>
 

</body>
</html>