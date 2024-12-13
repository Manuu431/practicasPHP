<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar 3</title>
</head>
<body>
    <?php
        $frase = "         Esto es     otro        ejemplo.     ";

        // Eliminar espacios adicionales y recortar la cadena
        $fraseNormalizada = preg_replace('/\s+/', ' ', trim($frase));

        echo "Frase: " . $fraseNormalizada . "<br>";
        
        $contadorEspacios = substr_count($fraseNormalizada, " ");
        $contadorLetras = 0;
        
        // Contar letras
        for ($i = 0; $i < strlen($fraseNormalizada); $i++) {
            if (ctype_alpha($fraseNormalizada[$i])) {
                $contadorLetras++;
            }
        }
        
        echo "La frase tiene " . $contadorEspacios . " espacios.<br>"; 
        echo "La frase tiene " . $contadorLetras . " letras.";        
    ?>
</body>
</html>