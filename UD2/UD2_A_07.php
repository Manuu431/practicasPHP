<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.7</title>
</head>
<body>
    
    <?php           //esta es la forma más común de mostrar texto
        define("radioTierra", 6371);
        echo "El radio de la Tierra es ";
        echo radioTierra;
        echo ".<br>";

        define("distanciaTierraSol", 150000000);
        echo "La distancia de la Tierra al Sol es ";
        echo distanciaTierraSol;
        echo ".<br>";

        define("PI", 3.1416);
        echo "El numero PI es ";
        echo PI;
        echo ".<br>";

        define("circunferencia", 2 * PI * radioTierra);
        echo "La circunferencia de la tierra es ";
        echo circunferencia;
        echo ".<br>";

        define("vueltasMundo", distanciaTierraSol / circunferencia);
        echo "La distancia de la Tierra al Sol equivale a ";
        echo vueltasMundo;
        echo " vueltas al mundo."
    ?>

</body>
</html>