<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');




var_dump($_POST);
// var_dump($_GET);

foreach($_POST as $item){
    
    print "<h3> $item </h3>";
}
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
    <input type="text" placeholder="vardas" name="user_name">
    <input type="text" placeholder="pavarde" name="user_surname">
    <input type="number" placeholder="telefonas" name="user_mobile">
        <select name="klase" id="klase">
            <option value="Zirafos">Zirafos</option>
            <option value="Makakos">Makakos</option>
            <option value="Tarakonai">Tarakonai</option>
        </select>
    <input type="submit" value="pateikti">
</form>


<div style="height: 200px; width: 200px; border: 3px solid black; margin: 25px;text-align: center;">
    <h3><?php print $_POST['user_name']; ?></h3>
    <h3><?php print $_POST['user_surname']; ?></h3>
    <h3><?php print $_POST['user_mobile']; ?></h3>
    <h3><?php print $_POST['klase']; ?></h3>
    
</div>



</body>
</html>






