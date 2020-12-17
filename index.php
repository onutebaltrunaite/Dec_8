<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');



unset($_POST['mygtukas']);
var_dump($_POST);
// var_dump($_GET);

// foreach($_POST as $item){
//     print "<h3> $item </h3>";
// }

$array = [
    'sex' => ['Woman', 'Man']
];



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

</style>

<body>


<form action="" method="post">
    <select name="sex" id="">
        <option value="0">Woman</option>
        <option value="1">Man</option>
    </select>
    <input type="submit" name="mygtukas" value="siusti">
</form>

<section>
    <h3><?php print $array['sex'][$_POST['sex']]; ?></h3>
</section>

</body>
</html>






