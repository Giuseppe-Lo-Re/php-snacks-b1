<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php
// Definisco una variabile contenente il paragrafo:
$paragraph = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages. 
and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";

// Suddivido il paragrafo in tanti paragrafi per ogni punto presente e li registro in un array:
$dividedParagraphsArray = explode(".", $paragraph);
var_dump($dividedParagraphArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>

    <h2>
        Paragrafo originale:
    </h2>

    <!-- Stampo il paragrafo originale: -->
    <p>
        "<?php echo $paragraph ?>"
    </p>

    <h2>
        Paragrafo Suddivisi:
    </h2>
    <!-- Stampo il paragrafi suddivisi: -->
    <ul>
        <?php for($i = 0; $i < count($dividedParagraphsArray); $i++) { ?>
            
        <li>
            "<?php echo $dividedParagraphsArray[$i] ?>"
        </li>
        <?php } ?>
    </ul>

</head>
<body>
    
</body>
</html>