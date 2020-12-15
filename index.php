<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');

$sunny = rand(0, 1);
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

<?php if ($sunny): ?>
    <img style="height: 200px; width: 200px;" src="https://i.pinimg.com/originals/db/d9/0d/dbd90d367167db3967af692343915f5d.png" alt="">
<?php else: ?>
    <img style="height: 200px; width: 200px;" src="https://s7d2.scene7.com/is/image/TWCNews/heavy_rain_jpg-6" alt="">
<?php endif; ?>

</body>
</html>