<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar 2</title>
</head>
<body>
    <?php
        $frase = "Esto es otro ejemplo, vale?.";
        echo "Frase: " . $frase . "<br>";
        
        $contadorEspacios = substr_count($frase, " ");
        $contadorLetras = 0;

        for($i = 0; $i < strlen($frase); $i++){
            if(ctype_alpha($frase[$i])){
                $contadorLetras++;
            }
        }
        echo "La frase tiene " . $contadorEspacios . " espacios.<br>"; 
        echo "La frase tiene " . $contadorLetras . " letras.";
    ?>
</body>
</html>