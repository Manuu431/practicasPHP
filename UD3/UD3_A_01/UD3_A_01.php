<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_01</title>
</head>
<body>
    <?php
        function mostrar_impares($cadena){
            //recorre cada caracter de la cadena
            for ($i = 0; $i < strlen($cadena); $i+=2){
                echo $cadena[$i];
            }
        }
        
        $frase = "A quien madruga Dios le ayuda";
        mostrar_impares($frase);
    ?>
</body>
</html>