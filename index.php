<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');



// if(isset($_POST['mygtukas'])){
//     $con = fopen("text.txt", "a");
//     fwrite($con, $_POST['vardas'] . ', ');
//     fclose($con);  
// };

if (!empty($_POST)){
    $con = fopen("text.txt", "a");
    fwrite($con, $_POST['vardas'] . ', ');
    fclose($con);    
}


$file = fopen("text.txt", "r");
$stringas = fgets($file);
var_dump($stringas);
fclose($file);


foreach($stringas as $value){
    var_dump($value);
};


// unset($_POST['mygtukas']);
// var_dump($_POST);
// var_dump($_GET);

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
    <input type="text" placeholder="Vardas..." name="vardas">   
    <input type="submit" name="mygtukas" value="siusti">
</form>
<!-- <table>
    <tr>
        <th>vardas</th>
    </tr>
    <tr>
        <?php foreach($stringas as $item): ?>
            <td><?php print $item; ?></td>
        <?php endforeach; ?>
    </tr>
</table> -->


</body>
</html>






