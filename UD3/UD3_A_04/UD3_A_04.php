<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_04</title>
</head>
<body>
    <?php
        $email = "marcela@permatrago.com";
        echo "Email a analizar: '$email'<br>"; echo "<br>";
        echo "Tiene " . strlen($email) . " letras.<br>";
        // Indica la posición del caracter "@" o FALSE si no está
        $posicion_arroba = strpos($email, "@");
        // Busca la aparición de un punto (.) partir de la arroba
        $posicion_punto = strpos($email, ".", $posicion_arroba);

        $tieneEspacios = strpos($email, " ");
        if ($posicion_arroba && $posicion_punto && !$tieneEspacios) {
            echo "Es una dirección de email válida<br>";
            $usuario = substr($email, 0, $posicion_arroba);
            $dominio = substr($email, $posicion_arroba + 1);
            echo "El nombre de usuario es: $usuario<br>";
            echo "El dominio es: $dominio<br>";
        }
        else{
            echo "No es una dirección de email válida<br>";
            if(!$posicion_arroba){
                echo "Le falta el caracter arroba.<br>";
            }
            if(!$posicion_punto){
                echo "El dominio no es válido.<br>";
            }
            if($tieneEspacios){
                echo "El email contiene espacios.<br>";
            }
        }
    ?>
</body>
</html>