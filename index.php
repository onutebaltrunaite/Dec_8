<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$savaitesDiena = 'apsiniauke';

switch ($savaitesDiena){
    case 'sauleta';
    $src = 'https://solarsystem.nasa.gov/system/basic_html_elements/11561_Sun.png';
    break;
    case 'lietus';
    $src = 'https://geografija.lt/wp-content/uploads/2020/06/lietus.jpg';
    break;
    case 'apsiniauke';
    $src = 'https://www.efoto.lt/files/images/52803/varniu%20pap%20zemesne.jpg';
    break;
    case 'audra';
    print 'KETVIRTADIENIS';
    break;
    case 'giedra';
    print 'PENKTADIENIS';
    break;
    default:
    print 'Toks oras neegzistuoja';
}


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

<img src="<?php print $src;?>" alt="">




</body>
</html>