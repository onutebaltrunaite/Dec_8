<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print 'Aš, ' . date('l') . ' ir PHP'; ?></title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1><b>Vardas</b>- HTML <?php print 'ir PHP'; ?> asas jau nuo <?php print date('Y') . ' metų.'; ?></h1>
    <p>Viskas prasidėjo <?php print date('m') . ' mėnesio ' . date('d') . ' dieną!'; ?></p>





</body>
</html>