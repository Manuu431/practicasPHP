<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.5</title>
</head>
<body>
    
    <?php           //esta es la forma más común de mostrar texto
        $nombre = "<b>Manuel</b>";
        $apellidos = "<b>Padilla Pi</b>";
        $edad = "<b>18</b>";
        $domicilio = "<b>Calle Paquito, 20</b>";
        $codPos = "<b>45645</b>";
        $telefono = "<b>123456789</b>";
        $profesion = "<b>Programador</b>";

        echo "Nombre: ";
        echo $nombre;

        echo "<br>Apellidos: ";
        echo $apellidos;

        echo "<br>Edad: ";
        echo $edad;

        echo "<br>Domicilio: ";
        echo $domicilio;

        echo "<br>Código Postal: ";
        echo $codPos;

        echo "<br>Teléfono: ";
        echo $telefono;

        echo "<br>Profesión: ";
        echo $profesion;
    ?>

</body>
</html>