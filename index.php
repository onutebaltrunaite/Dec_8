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
$stringas = substr_replace($stringas, "", -2);
var_dump($stringas);
fclose($file);

$array = explode(', ', $stringas);
var_dump($array);



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
    <table>
        <tr>
            <th>vardas</th>
        </tr>

        <?php foreach($array as $item): ?>
        <tr>
            <td><?php print $item; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>




    <table style="margin-top: 50px;">
    <tr>
        <th>Gyvuno rusis</th>
        <th>Vardas</th>
        <th>Amzius</th>
        <th>Veisle</th>
    </tr>

    <!-- <?php foreach($augintiniai as $value): ?>
        <tr>
            <?php foreach($value as $morevalue): ?>
                <td>
                    <?php print $morevalue; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?> -->
</table>

</body>
</html>






