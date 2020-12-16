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
    <title>PAVADINIMAS</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
.piestukas {
    background-image: url('images/pencil.png')
}
</style>

<body>

<?php for ($y = 1; $y <= 2; $y++): ?>
<div style="display: flex; border: 3px solid blue; margin: 25px;">
    <?php for ($x = 1; $x <= 10; $x++): ?>
        <div style="height: 100px; width: 100px; background-size: cover; margin: 5px; border: 1px solid black; padding: 5px;" class="piestukas"></div>
    <?php endfor; ?>
</div>
<?php endfor; ?>


</body>
</html>