<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $savaitesDiena = 'giedra';
// switch ($savaitesDiena){
//     case 'sauleta';
//     $src = 'https://solarsystem.nasa.gov/system/basic_html_elements/11561_Sun.png';
//     break;
//     case 'lietus';
//     $src = 'https://geografija.lt/wp-content/uploads/2020/06/lietus.jpg';
//     break;
//     case 'apsiniauke';
//     $src = 'https://www.efoto.lt/files/images/52803/varniu%20pap%20zemesne.jpg';
//     break;
//     case 'audra';
//     $src = 'images/bomb.jpg';
//     break;
//     case 'giedra';
//     $src = 'https://bloximages.chicago2.vip.townnews.com/tucson.com/content/tncms/assets/v3/editorial/3/fb/3fb92eca-31bd-11e6-92d5-c3dd26bc749c/575f3fa80552e.image.jpg?resize=1200%2C878';
//     break;
//     default:
//     print 'Toks oras neegzistuoja';
// }
// $x = 0;
// while ($x < 5){
//     print 'Spausdink <br>';
//     $x++;
// }


$studentai = [
    [
        'name' => 'Tomas',
        'lastname' => 'Tomaitis',
        'age' => 18,
        'sex' => 'man'
    ],
    [
        'name' => 'Milda',
        'lastname' => 'Mildaite',
        'age' => 45,
        'sex' => 'woman'
    ],
    [
        'name' => 'Kamile',
        'lastname' => 'Kamilaite',
        'age' => 22,
        'sex' => 'woman'
    ]
];

//1. suformuokite nauja masyva kuri sudarytu visu vartotoju vardai.
$naujasMasyvas1 = [];
foreach($studentai as $studentas){
    $naujasMasyvas1[] = $studentas['name'];
};
// var_dump($naujasMasyvas1);

//2. suformuokite nauja masyva kuri sudarytu visu vartotoju pavardes.
$naujasMasyvas2 = [];
foreach($studentai as $studentas){
    $naujasMasyvas2[] = $studentas['lastname'];
};
// var_dump($naujasMasyvas2);

//3. suformuokite nauja masyva kurio key butu vardai o value butu pavardes.
// $naujasMasyvas3 = [];
// foreach($studentai as $key => $value){
//     $naujasMasyvas3[] = [
//         $value['name'] => $value['lastname']
//     ];
// };
// var_dump($naujasMasyvas3);

$combo = array_combine($naujasMasyvas1, $naujasMasyvas2);
// var_dump($combo);

//4. vardu masyva isrykiuokite abeceles tvarka. asort reikejo

sort($naujasMasyvas1);
// var_dump($naujasMasyvas1);

$kitiVardai = [
    0 => 'Algis',
    6 => 'Zenonas',
    9 => 'BAba'
];
asort($kitiVardai);
// asort key nesurikiuoja
// var_dump($kitiVardai);

//5. vardu masyva isrykiuokite abeceles tvarka, key turi buti nuo 0 iki ... nuosekliai. sortas


$gerimai = [
    'stiprus' => [    
        'degtine' => [
            [
                'pavadinimas' => 'FINLANDIA',
                'tipas' => 'degtine',
                'kilmes salis' => 'Suomija',
                'turis' => 1,
                'stiprumas' => 40,
                'kaina' => 16.99, 
            ],
            [
                'pavadinimas' => 'ABSOLUT',
                'tipas' => 'degtine',
                'kilmes salis' => 'Svedija',
                'turis' => 1,
                'stiprumas' => 40,
                'kaina' => 15.99, 
            ]

        ],
        'brendis' => [
            [
                'pavadinimas' => 'STOCK 84',
                'tipas' => 'brendis',
                'kilmes salis' => 'Italija',
                'turis' => 1,
                'stiprumas' => 38,
                'kaina' => 17.99, 
            ],
            [
                'pavadinimas' => 'GRAND CAVALIER',
                'tipas' => 'brendis',
                'kilmes salis' => 'Latvija',
                'turis' => 1,
                'stiprumas' => 38,
                'kaina' => 15.99, 
            ]
        ],
        'viskis' => [
            [
                'pavadinimas' => 'THE NAKED GROUSE',
                'tipas' => 'viskis',
                'kilmes salis' => 'Jungtine Karalyste',
                'turis' => 0.7,
                'stiprumas' => 40,
                'kaina' => 29.99,    
            ],
            [
                'pavadinimas' => 'KENTUCKY OWL',
                'tipas' => 'viskis',
                'kilmes salis' => 'JAV',
                'turis' => 0.7,
                'stiprumas' => 60.5,
                'kaina' => 239.99,   
            ]
        ],
        'romas' => [
            [
                'pavadinimas' => 'BUMBU',
                'tipas' => 'romas',
                'kilmes salis' => 'Prancuzija',
                'turis' => 0.7,
                'stiprumas' => 35,
                'kaina' => 33.99, 
            ],
            [
                'pavadinimas' => 'CAPTAIN MORGAN WHITE',
                'tipas' => 'romas',
                'kilmes salis' => 'Jamaika',
                'turis' => 0.7,
                'stiprumas' => 37.5,
                'kaina' => 12.99, 
            ]
        ],
    ],
    'silpni' => [    
        'sampanas' => [
            [
                'pavadinimas' => 'PREMIUS ROSE CREMANT DE BORDEAUX',
                'tipas' => 'sampanas',
                'kilmes salis' => 'Prancuzija',
                'turis' => 0.75,
                'stiprumas' => 12,
                'kaina' => 7.99, 
            ],
            [
                'pavadinimas' => 'CASA CHARLIZE BRUT PROSECCO DOC',
                'tipas' => 'sampanas',
                'kilmes salis' => 'Italija',
                'turis' => 0.75,
                'stiprumas' => 11,
                'kaina' => 7.99, 
            ]
        ],
        'vynas' => [
                [
                    'pavadinimas' => 'BOURGOGNE BLANC CHARDONNAY',
                    'tipas' => 'vynas',
                    'rusis' => 'baltas',
                    'kilmes salis' => 'Prancuzija',
                    'turis' => 0.75,
                    'stiprumas' => 13,
                    'kaina' => 11.99, 
                ],
                [
                    'pavadinimas' => 'ST PINOT GRIGIO DELLA VENEZIE',
                    'tipas' => 'vynas',
                    'rusis' => 'raudonas',
                    'kilmes salis' => 'Prancuzija',
                    'turis' => 0.75,
                    'stiprumas' => 12.5,
                    'kaina' => 5.99,
                ]
        ],
        'sidras' => [
            [
                'pavadinimas' => 'KINGSTON PRESS BERRY',
                'tipas' => 'sidras',
                'kilmes salis' => 'Jungtine Karalyste',
                'turis' => 0.5,
                'stiprumas' => 3,
                'kaina' => 1.99, 
            ],
            [
                'pavadinimas' => 'MAGNERS IRISH BERRY ',
                'tipas' => 'sidras',
                'kilmes salis' => 'Airija',
                'turis' => 0.33,
                'stiprumas' => 4,
                'kaina' => 1.59, 
            ]  
        ],
        'alus' => [
            [
                'pavadinimas' => 'CARLSBERG NEFILTRUOTAS',
                'tipas' => 'alus',
                'rusis' => 'tamsus',
                'kilmes salis' => 'Lietuva',
                'turis' => 0.5,
                'stiprumas' => 5,
                'kaina' => 1.25, 
            ],
            [
                'pavadinimas' => 'VOLFAS ENGELMAN NEFILTRUOTAS',
                'tipas' => 'alus',
                'rusis' => 'sviesus',
                'kilmes salis' => 'Lietuva',
                'turis' => 0.56,
                'stiprumas' => 5.2,
                'kaina' => 1.15, 
            ]    
        ],
    ],

];

// var_dump($gerimai);

$manoVynas = [
    'pavadinimas' => 'PETIT CHABLIS DOMAINE PASSY LE CLOU',
    'tipas' => 'vynas',
    'rusis' => 'baltas',
    'kilmes salis' => 'Prancuzija',
    'turis' => 0.75,
    'stiprumas' => 12.5,
    'kaina' => 13.99, 
];


if ($manoVynas['stiprumas'] < 14){
    foreach($gerimai['silpni'] as $key => $tipas){
        
       if ($key == $manoVynas['tipas']) {
        $gerimai['silpni'][$key][] = $manoVynas;
        // var_dump($tipas);
       }
    };
} else {
    foreach($gerimai['stiprus'] as $key => $tipas){
        
        if ($key == $manoVynas['tipas']) {
            $gerimai['stiprus'][$key][] = $manoVynas;
        }
    };
}


var_dump($gerimai['silpni']['vynas']);




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

<!-- <img src="<?php print $src;?>" alt=""> -->




</body>
</html>