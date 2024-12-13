<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.8</title>
</head>
<body>
    
    <?php           //esta es la forma más común de mostrar texto
        define("precioManzana", 3);
        define("precioPera", 2);
        define("precioPlatano", 1);
        define("precioMelon", 4);

        $pesoManzana = 3.42;
        $pesoPera = 4.31;
        $pesoPlatano = 5.16;
        $pesoMelon = 2.67;

        $precioTotal =  precioManzana * $pesoManzana + 
                        precioPera * $pesoPera + 
                        precioPlatano * $pesoPlatano + 
                        precioMelon * $pesoMelon;

        echo "Producto - Precio/Kg - Peso - Precio total<br><br>";

        echo "Manzana - " . precioManzana . " - $pesoManzana - " . precioManzana * $pesoManzana . "<br>";

        echo "Pera - " . precioPera . " - $pesoPera  - " . precioPera * $pesoPera . "<br>";

        echo "Platano - " . precioPlatano . " - $pesoPlatano - " . precioPlatano * $pesoPlatano . "<br>";

        echo "Melon - " . precioMelon . " - $pesoMelon - " . precioMelon * $pesoMelon . "<br>";

        echo "Total: $precioTotal<br>";

        echo "Gracias por su compra";
    ?>

</body>
</html>