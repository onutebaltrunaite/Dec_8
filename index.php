<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$darbuotojai = [
    [
        'name' => 'Juozas',
        'lastname' => 'Juozaitis',
        'age' => '40',
        'sex' => 'man',
    ],
    [
        'name' => 'Milda',
        'lastname' => 'Mildauskaite',
        'age' => '28',
        'sex' => 'woman',
    ],
    [
        'name' => 'Darius',
        'lastname' => 'Dariauskas',
        'age' => '40',
        'sex' => 'man',
    ],
    [
        'name' => 'Skaiste',
        'lastname' => 'Uzkamante',
        'age' => '40',
        'sex' => 'woman',
    ],
    [
        'name' => 'Giedre',
        'lastname' => 'Miliauskiene',
        'age' => '38',
        'sex' => 'woman',
    ],
    [
        'name' => 'Kasparas',
        'lastname' => 'Dambrauskas',
        'age' => '22',
        'sex' => 'man',
    ],
];


//11. Patikrinkite kuriu darbuotoju lytis yra 'woman' ir jaunesni nei 30m.
// Ju visus duomenis atvaizduokite ekrane sukurdami kortele.

// foreach ($darbuotojai as $person){
//     if($person['sex'] == 'woman' && $person['age'] < 30){
//       var_dump($person);  
//     }
// };

//12. Suskaiciuokite kiek zmoniu yra su lytimi 'man' ir 'age' = 40.
// Zmogus turi tureti siuos abu parametrus.

$number = 0;
foreach($darbuotojai as $person){
    if($person['age'] == 40 && $person['sex'] == 'man'){
        $number++;
    }
};
print "keturiasdesimtmetis vyras yra tiek $number zmoniu" . "<br>";

//13. sukurkite random kintamaji nuo kurio priklausys kokius zmones su ju vardais
// ir amziumi atvazduos ekrane. Random kintamasis turi buti tiesiogiai susietas su amziumi.
// Jei tokio amziaus zmogaus nera, ekrane atvaizduojamas random sugeneruotas amzius ir uzrasas,
//'Tokio amziaus darbuotojo nera.'

$kintamasis = rand(20, 42);
// random ne rankiniu budu reiketu o isivest $min ir $max
$kiekYra = 0;
foreach($darbuotojai as $person){
   if($person['age'] == $kintamasis) {
        print $person['name'] . $person['age'] . "<br>";
        $kiekYra++;
   }
};
if($kiekYra == 0){
  print "Tokio amziaus $kintamasis darbuotojo nera";  
};

//14. Isimkite is masyvo visus vartotojus kuriu amzius 40m.
foreach($darbuotojai as $key => $person){
    if($person['age'] == 40){
        unset($darbuotojai[$key]);
    } 
};
var_dump($darbuotojai);


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


<!-- 11 uzduotis -->
<?php foreach ($darbuotojai as $person): ?>
    <?php if($person['sex'] == 'woman' && $person['age'] < 30): ?>
 <div style="height: 200px; width:200px; color: blue; text-align: center; background-color:rgb(180, 179, 179); padding: 20px;">
    <h2><?php print $person['name'] . ' ' . $person['lastname'] ;?></h2>
    <h2>Amzius - <?php print $person['age'] ;?></h2>
    <h2>Lytis - <?php print $person['sex'] ;?></h2>
 </div>
    <?php endif; ?>
    <?php endforeach; ?>


</body>
</html>