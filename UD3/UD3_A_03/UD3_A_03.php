<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_03</title>
</head>
<body>
    <?php
        $dni = "20202020T";
        echo "NIF: " . $dni . "<br>";

        $numeros = substr($dni, 0, 8);      //coge los primeros 8 caracteres
        $letra = strtoupper($dni[8]);       //coge el ultimo caracter

        if(strlen($dni) != 9){              //si tiene mas de 9 caracteres no deja
            echo "El NIF debe tener 8 números y 1 letra. No se puede realizar la operación.<br>";
        }
        elseif(!is_numeric($numeros)){      //los primeros 8 caracteres tienen que ser numeros
            echo "Los primeros 8 caracteres deben ser números.<br>";
        } 
        else{
            //array con las letras ordenadas
            $tablaLetras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

            // Cálculo del resto de la división
            $resto = ($numeros) % 23;

            // Comprobamos si la letra calculada coincide con la letra proporcionada
            if($tablaLetras[$resto] == $letra){
                echo "El NIF es válido: $dni<br>";
            }
            else{
                echo "La letra del NIF no coincide. La letra correcta debería ser: " . $tablaLetras[$resto] . "<br>";
            }
        }
    ?>
</body>
</html>