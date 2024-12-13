<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_13</title>
</head>
<body>
    <?php
        include 'cripto.php';                            //incluye la biblioteca de funciones

        $frase = ["Tokyo", "Paris", "Madrid", "Japon"];     //array de ciudades
        $desplazamiento = 1;                                //definición del desplazamiento

        //recorre el array original y muestra las ciudades
        foreach ($frase as $ciudad) {
            echo "Ciudad original: " . $ciudad . "<br>";                //muestra cada ciudad antes de codificar

            // Codificar
            $codificado = codificar($ciudad, $desplazamiento);          //codifica la ciudad
            echo "Ciudad codificada: " . $codificado . "<br>";          //muestra la ciudad codificada

            // Decodificar
            $decodificado = decodificar($codificado, $desplazamiento);  //decodifica la ciudad
            echo "Ciudad decodificada: " . $decodificado . "<br><br>";  //muestra la ciudad decodificada
        }
    ?>
</body>
</html>