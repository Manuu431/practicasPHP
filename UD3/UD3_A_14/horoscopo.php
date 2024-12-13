<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>horoscopo.php</title>
</head>
<body>
    <?php
        if ($_REQUEST['signo']) {
            $signo = htmlspecialchars($_REQUEST['signo']); // Recoge el signo del zodiaco seleccionado
            echo "Tu signo del zodiaco es: $signo."; // Muestra el signo seleccionado
        } else {
            echo "No se ha seleccionado ningún signo."; // Mensaje de error si no se seleccionó nada
        }
    ?>
</body>
</html>