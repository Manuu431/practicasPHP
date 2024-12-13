<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_02</title>
</head>
<body>
    <?php
        $frase = "El perro de San Roque no tiene rabo";

        // 1. Las letras totales de la frase (sin contar los espacios)
        $letras_totales = strlen(str_replace(' ', '', $frase));
        echo "Letras totales de la frase: " . $letras_totales . "<br>";

        // 2. El número de palabras de la frase
        $palabras = explode(' ', $frase);
        echo "Número de palabras de la frase: " . count($palabras) . "<br>";

        // 3. Una línea con el número de letras de cada palabra
        echo "Número de letras de cada palabra:<br>";
        foreach ($palabras as $palabra) {
            echo $palabra . ": " . strlen($palabra) . " letras<br>";
        }
    ?>
</body>
</html>