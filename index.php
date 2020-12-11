<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'php.php';

// var_dump($arrayGallery);
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
    <header id='home'>
        <div class='nav'>
            <?php foreach ($array['navBar'] as $item): ?>
            <a href="<?php print $item['id']?>" class='btnStyle'><?php print $item['name']; ?></a>
            <?php endforeach; ?>
        </div>
    </header>
    <main>
        <section id='about'>
            <h1>ABOUT</h1>
            <?php foreach ($array['arrayAbout'] as $item): ?>
            <img src="<?php print $item['logo']; ?>" alt="">
            <div><?php print $item['about']; ?></div>  
            <?php endforeach; ?>
        </section>
        <section id='gallery'>
            <h1>GALLERY</h1>
            <div class='d-flex'>
                <?php foreach ($array['arrayGallery'] as $item): ?>
                <img src="<?php print $item['picture']; ?>" alt="">
                <div><?php print $item['about']; ?></div>
                <?php endforeach; ?> 
            </div>
        </section>
    </main>
    <footer id='contacts'>
        <h1>CONTACTS</h1>
        <?php foreach ($array['arrayContacts'] as $item): ?>
            <p><?php print $item['phone'] ?></p>
            <p><?php print $item['address'] ?></p>
        <?php endforeach; ?>   
    </footer>



</body>
</html>