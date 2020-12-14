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
var_dump($naujasMasyvas1);

//2. suformuokite nauja masyva kuri sudarytu visu vartotoju pavardes.
$naujasMasyvas2 = [];
foreach($studentai as $studentas){
    $naujasMasyvas2[] = $studentas['lastname'];
};
var_dump($naujasMasyvas2);

//3. suformuokite nauja masyva kurio key butu vardai o value butu pavardes.
// $naujasMasyvas3 = [];
// foreach($studentai as $key => $value){
//     $naujasMasyvas3[] = [
//         $value['name'] => $value['lastname']
//     ];
// };
// var_dump($naujasMasyvas3);

$combo = array_combine($naujasMasyvas1, $naujasMasyvas2);
var_dump($combo);

//4. vardu masyva isrykiuokite abeceles tvarka. asort reikejo

sort($naujasMasyvas1);
var_dump($naujasMasyvas1);

$kitiVardai = [
    0 => 'Algis',
    6 => 'Zenonas',
    9 => 'BAba'
];
asort($kitiVardai);
// asort key nesurikiuoja
var_dump($kitiVardai);


//5. vardu masyva isrykiuokite abeceles tvarka, key turi buti nuo 0 iki ... nuosekliai. sortas



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