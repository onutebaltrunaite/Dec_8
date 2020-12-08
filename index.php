<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
header("Refresh: $sec; url=$page");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> PHP lydės <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'year')) . '!'; ?></title>
<style>
    div {
    height: 200px;
    width: 200px;
    background-size: cover;
}
.dice1 {
    background-image: url(images/1.png);
}
.dice2 {
    background-image: url(images/2.png);
}
.dice3 {
    background-image: url(images/3.png);
}
.dice4 {
    background-image: url(images/4.png);
}
.dice5 {
    background-image: url(images/5.png);
}
.dice6 {
    background-image: url(images/6.png);
img {
    margin: 200px;
}
</style>

</head>


</head>
<body>


    <div class='<?php print 'dice' . rand(1, 6); ?>'>

    <img style='width: <?php print date('s'); ?>0px; height: <?php print date('s'); ?>0px;' src="images/bomb" alt="">
    <div>
        <?php print date('s');?>
    </div>




</body>
</html>
