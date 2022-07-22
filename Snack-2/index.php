<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

// Passo come parametri GET name, mail e age:
$name = $_GET('name');
$mail = $_GET('mail');
$age = $_GET('age');

// Definisco la variabile che conterrà il messaggio per l'utente:
$userMessage;

// Se name è più lungo di 3 caratteri (= count(name) > 3);
// Se mail contiene un punto e una chiocciola (= strpos diverso da false);
// Se mail contiene una chiocciola (= strpos diverso da false);
if(count($name) > 3) && strpos($mail, '.') !== false && strpos($mail, '@') !== false {
    $userMessage = 'Accesso Riuscito';
} else {
    $userMessage = 'Accesso Negato';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>

    <!-- Stampo nel DOM: -->
    <h1>
        <?php echo $userMessage; ?>
    </h1>

</body>
</html>