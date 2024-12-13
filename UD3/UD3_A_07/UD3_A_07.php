<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_07</title>
</head>
<body>
    <?php
        $frase = "Esto es un ejemplo, abcde.";
        $fraseDividida = str_split($frase);
        $resultado = "";        //variable donde se almacenará la frase codificada
        $desplazamiento = 3;
        echo "Frase original: " . $frase . "<br>";

        for($i = 0; $i < strlen($frase); $i++){
            $caracter = $frase[$i];
            $codigoAscii = ord($caracter);
            if(esLetraMinus($caracter)){
                if($caracter === 'z'){
                    $resultado .= 'a'; //la z se convierte en a
                }
                else{
                    $resultado .= chr($codigoAscii + $desplazamiento);    //pone la siguiente letra
                }
            }
            elseif(esLetraMayus($caracter)){
                if($caracter === 'Z'){
                    $resultado .= 'A'; //la Z se convierte en A
                }
                else{
                    $resultado .= chr($codigoAscii + $desplazamiento);    //pone la siguiente letra
                }
            }
            else{
                $resultado .= $caracter;                    //añade los caracteres que no sean letras
            }
        }

        echo "Frase codificada: " . $resultado;             //muestra la frase codificada

        function esLetraMinus($caracter){
            return ord($caracter) >= 97 && ord($caracter) <= 122; //a-z
        }

        function esLetraMayus($caracter){
            return ord($caracter) >= 65 && ord($caracter) <= 90; //A-Z
        }
    ?>
</body>
</html>