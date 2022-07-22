<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array 
mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Creo i contenitori per le suddivisioni: -->
    <style>
        .teachers {
            background-color: grey;
            padding: 20px;
        }
        .pm {
            background-color: green;
            padding: 20px;
        }
    </style>
    <title>Snack-5</title>

    <!-- Creo un ciclo for che scorrerà l'array con indice 'teachers': -->
    <?php For($i = 0; $i < count($db['teachers']); $i++) { ?>

        <div class="teachers">

            <!-- Stampo nel DOM il template popolato: -->
            <?php echo $db['teachers'][$i]['name'] . ' ' .$db['teachers'][$i]['lastname'] ?>
        </div>
        <?php } ?>

    <!-- Creo un ciclo for che scorrerà l'array con indice 'pm': -->
    <?php for($i = 0; $i < count($db['pm']); $i++) { ?>

        <div class="pm">

            <!-- Stampo nel DOM il template popolato: -->
            <?php echo $db['pm'][$i]['name'] . ' ' .$db['pm'][$i]['lastname'] ?>
        </div>
    <?php } ?>
</head>
<body>
    
</body>
</html>