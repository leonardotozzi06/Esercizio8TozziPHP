<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condizioni Smartphone</title>
</head>
<body>
<?php
    $modello = "iPhone 13";
    $grado = "b";

    switch ($grado) {
        case 'a':
            echo "<h2>$modello perfetto, pari al nuovo.</h2>";
            break;
        case 'b':
            echo "<h2>$modello in ottime condizioni.</h2>";
            break;
        case 'c':
            echo "<h2>$modello con graffi e/o segni di usura.</h2>";
            break;
        default:
            echo "<h2 style='color:red;'>errore: grado non riconosciuto</h2>";
            break;
    }
?>
</body>
</html>