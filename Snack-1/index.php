<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!-- Creo un array contentente le partite di basket: -->
<?php

$Championship = [
    [
        'team home' => 'Chicago Bulls',
        'visitors' => 'Boston Celtics',
        'team home points' => 50,
        'visitors points' => 20,
    ],
    [
        'team home' => 'Atlanta Hawks',
        'visitors' => 'Toronto Raptors',
        'team home points' => 36,
        'visitors points' => 18,
    ],
    [
        'team home' => 'Philadelphia 76ers',
        'visitors' => 'Milwaukee Bucks',
        'team home points' => 44,
        'visitors points' => 62,
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>

</head>
<body>
    
    <!-- Title -->
    <h1>
        NBA Matches
    </h1>

    <!-- Creo un ciclo for che scorrerà L'array: -->
    <?php for($i = 0; $i < count($Championship); $i++) { ?>
        <?php $thisMatch = $Championship[$i]; ?>
        
        <ul>
            
            <!-- Creo un template: -->
            <!-- <li>
                [team home] - [visitors] | [team home points] - [visitors points]
            </li> -->

            <!-- Popolo il template con i dati che il ciclo for ha estrapolato dall'array e stampo Nel DOM: -->
            <li>
                <?php echo $thisMatch['team home']; ?> - <?php echo $thisMatch['visitors']; ?> | 
                <?php echo $thisMatch['team home points']; ?> - <?php echo $thisMatch['visitors points']; ?>
            </li>
        </ul>
    <?php } ?>
    

    
    


</body>
</html>