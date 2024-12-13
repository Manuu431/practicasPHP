<?php
// Función para codificar la frase
function codificar($frase, $desplazamiento){
    $resultado = "";                                // variable donde se almacenará la frase codificada
    $desplazamiento = $desplazamiento % 26;         // normaliza el desplazamiento

    for($i = 0; $i < strlen($frase); $i++){       // recorre cada carácter de la frase
        $caracter = $frase[$i];                     // obtiene el carácter actual
        $codigoAscii = ord($caracter);              // valor ASCII del carácter
        
        if (esLetraMinus($caracter)){              // verifica si es letra minúscula
            $nuevoAscii = (($codigoAscii - 97 + $desplazamiento) % 26) + 97; // nuevo carácter minúscula
            $resultado .= chr($nuevoAscii);         // añade el nuevo carácter
        }
        elseif (esLetraMayus($caracter)){        // verifica si es letra mayúscula
            $nuevoAscii = (($codigoAscii - 65 + $desplazamiento) % 26) + 65; // nuevo carácter mayúscula
            $resultado .= chr($nuevoAscii);         // añade el nuevo carácter
        }
        else{
            $resultado .= $caracter;                // añade caracteres que no son letras
        }
    }

    return $resultado;                              // devuelve la frase codificada
}

function esLetraMinus($caracter){
    return ord($caracter) >= 97 && ord($caracter) <= 122; // verifica a-z
}

function esLetraMayus($caracter){
    return ord($caracter) >= 65 && ord($caracter) <= 90; // verifica A-Z
}

?>
