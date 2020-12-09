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
    <title> Title </title>
<style>

</style>

</head>

</head>
<body>

    <?php 
        $vartotojai = [
            'Person1' => [
                'vardas' => 'Vardenis',
                'pavarde' => 'Pavardenis',
                'telefonas' => '666-666-666',
                'amzius' => '65metai',
                'lytis' => 'vyras',
            ],
            'Person2' => [
                'vardas' => 'Jonas',
                'pavarde' => 'Jonauskas',
                'telefonas' => '555-666-555',
                'amzius' => '45metai',
                'lytis' => 'vyras',
            ],
            'Person3' => [
                'vardas' => 'Jurga',
                'pavarde' => 'Jurgiene',
                'telefonas' => '444-333-666',
                'amzius' => '25metai',
                'lytis' => 'moteris',
            ],
            'Person4' => [
                'vardas' => 'Giedre',
                'pavarde' => 'Gaidyte',
                'telefonas' => '666-777-666',
                'amzius' => '35metai',
                'lytis' => 'moteris',
            ],
            'Person5' => [
                'vardas' => 'Tatjana',
                'pavarde' => 'Iene',
                'telefonas' => '999-999-999',
                'amzius' => '30metai',
                'lytis' => 'moteris',
            ],
        ];

        
        // var_dump($vartotojai);
        foreach($vartotojai as $person) {
            print $person['vardas'] . ' ';
        };
            // var_dump($vartotojai);
            // foreach($vartotojai as $key => $value){
            //     var_dump($value);
            // }


    ?>
        <table>
            <tr>
                <?php foreach(array_keys($vartotojai) as $vardas): ?>
                <th><?php print $vardas . ' '; ?></th>
                <?php endforeach; ?>
            </tr>
                <?php foreach($vartotojai as $info): ?>
            <tr>
                <td><?php print $info['vardas'] . ' '; ?></td>
                <td><?php print $info['pavarde'] . ' '; ?></td>
                <td><?php print $info['telefonas'] . ' '; ?></td>
                <td><?php print $info['amzius'] . ' '; ?></td>
                <td><?php print $info['lytis'] . ' '; ?></td>
            </tr>
                <?php endforeach; ?>    
        </table>



</body>
</html>

