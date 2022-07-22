<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array 
non dovrà contenere lo stesso numero più di una volta -->
<?php 
// Definisco un array vuoto che conterrà i numeri casuali:
$randomNumbersArray = [];

// Creo un ciclo while che lavorerà finchè la lunghezza dell'array sia pari a 15:
    while(count($randomNumbersArray) < 15) {

        // Genero un numero random tra 1 e 100:
        $randomNumber = rand(1, 100);

        // lo pusho nell'array se non è già presente:
        if(!in_array($randomNumbersArray, $randomNumber)) {
            $randomNumbersArray[] = $randomNumber;
        }
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
</head>
<body>
    
    <h1> 
        Array con 15 numeri casuali:
    </h1>

    <div>
        <?php echo $randomNumbersArray ?>
    </div>
</body>
</html>