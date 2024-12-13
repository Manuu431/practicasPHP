<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.4</title>
</head>
<body>
    
    <?php           //esta es la forma más común de mostrar texto
        $nombre = "Manuel";
        $apellidos = "Padilla Pi";
        $edad = "18";
        $domicilio = "Calle Paquito, 20";
        $codPos = "45645";
        $telefono = "123456789";
        $profesion = "Programador";

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