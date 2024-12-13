<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_12</title>
</head>
<body>
    <?php
        include 'cripto.php';

        $frase = "Esto es un ejemplo, abcde.";
        $desplazamiento = 1;

        echo "Frase original: " . $frase . "<br>";

        // Codificar
        $fraseCodificada = codificar($frase, $desplazamiento);
        echo "Frase codificada: " . $fraseCodificada . "<br>";

        // Decodificar
        $fraseDecodificada = decodificar($fraseCodificada, $desplazamiento);
        echo "Frase decodificada: " . $fraseDecodificada . "<br>";
    ?>
</body>
</html>