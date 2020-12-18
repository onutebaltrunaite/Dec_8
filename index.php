<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');



$failas = fopen("test.csv", "r"); 
$failoTurinys = fgetcsv($failas);
fclose($failas);  



if(empty($failoTurinys)){
    $content = fopen('test.csv', 'a');
    fwrite($content, 'vardas, pavarde, amzius' . "\r\n");
    fclose($content);  
} else {
    if (!empty($_POST['vardas']) && !empty($_POST['pavarde']) && !empty($_POST['amzius'])){
        $content = fopen('test.csv', 'a');
        fwrite($content, $_POST['vardas'] . ',' . $_POST['pavarde'] . ',' . $_POST['amzius'] . "\r\n"); 
        fclose($content);
    }
}

$arrayToTableFromCsv = []; // sukurtas naujas masyvas i kuri sudes visa data is CSV

if (($h = fopen('test.csv', "r")) !== FALSE) {  //i if salyga idetas tikrinimas failo atidarymo ir mode r aprasymo
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) { //sukamas While ciklas per paimta is csv faila kuriam nurodomas koks atsumas galimas tarp kableliu bei sirtukas tarp stulpeliu
        $arrayToTableFromCsv[] = $data; //priskiriama i nauja masyva masyvai su duomenis(kiekviena eilute yra masyvas)
    }
    fclose($h); // uzdaromas prisijungimas prie failo
}

var_dump($arrayToTableFromCsv); //isvardampinamas masyvas pagal kuri jau daroma lentele


//1. sukurti forma kuri butu issaugoma CSV faile. Forma sudaro: eilutes id, augintinio nuotraukos src kodas, 
// augintinio pavadinimas, augintinio metai, augintinio savininko vardas //2. sukurti mini section kuriame butu 
// atvaizduojama gyvuno foto ir pilnas aprasymas isskyrus eilutes ID.

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
table {
    border-collapse: collapse;
}
th, td {
    text-align: center;
    padding: 5px;
    border: 1px solid black;
}
</style>

<body>

<form action="" method="post">
    <input type="text" placeholder="Eilutes ID..." name="ID">   
    <input type="text" placeholder="Augintinio pavadinimas..." name="augintinis">   
    <input type="text" placeholder="Augintinio metai..." name="amzius">   
    <input type="text" placeholder="Savininko vardas..." name="savininkas">   
    <input type="text" placeholder="Nuotraukos src..." name="nuotrauka">   

    <input type="submit" name="mygtukas" value="siusti">
</form>



</body>
</html>






