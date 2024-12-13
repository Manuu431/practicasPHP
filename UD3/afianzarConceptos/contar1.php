<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar 1</title>
</head>
<body> 
    <?php
        $frase = "Esto es un ejemplo.";
        echo "Frase: " . $frase . "<br>";
        
        $contadorEspacios = 0;
        $contadorLetras = 0;

        for($i = 0; $i < strlen($frase); $i++){
            if( ord($frase[$i]) >= 65 && ord($frase[$i]) <= 90 ||
                ord($frase[$i]) >= 97 && ord($frase[$i]) <= 122 ){
                $contadorLetras++;
            }
            else if(ord($frase[$i]) == 32){
                $contadorEspacios++;
            }
        }
        echo "La frase tiene " . $contadorEspacios . " espacios.<br>"; 
        echo "La frase tiene " . $contadorLetras . " letras.";
    ?>
</body>
</html>