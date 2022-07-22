<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

// Creo l'array della classe:
$class = [
    [
        'name' => 'Giuseppe',
        'lastname' => 'Verdi',
        'grades' => [ 8, 7, 6, 7]
    ],
    [
        'name' => 'Mario',
        'lastname' => 'Rossi',
        'grades' => [ 8, 5, 7, 6]
    ],
    [
        'name' => 'Flaminia',
        'lastname' => 'Gialli',
        'grades' => [ 9, 9, 9, 9]
    ],
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-6</title>
</head>
<body>

    <h1>
        PAGELLE
    </h1>

    <!-- Creo un ciclo for che scorrerà l'array: -->
    <?php for($i = 0; $i < count($class); $i++) { ?>
    <div>

        <!-- Stampo nel DOM il template popolato: -->
        Alunno: <?php echo $class[$i]['name'] . ' ' . $class[$i]['lastname'] ?> | 
        media voti: <?php echo averageGrades($class[$i]['grades']) ?>
    </div>
    <?php } ?>

    <?php


    // Creo una funziona che calcola la media dei voti( somma singoli voti diviso numero voti):
    function averageGrades($grade) {
        for($i = 0; $i < count($grade); $i++) {
            $sumGrades += $grade[$i];
        }
        return $sumGrades / count($grade);
    }
    ?>
</body>
</html>