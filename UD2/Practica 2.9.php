<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.9</title>
</head>
<body>
    
    <?php           //esta es la forma más común de mostrar texto
        define("precioManzana", 3);
        define("precioPera", 1.40);
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


        echo "Productos que cuestan menos de 1,50€:<br>";

        if(precioManzana <= 1.50){
            echo "Manzana<br>";
        }
        if(precioPera <= 1.50){
            echo "Pera<br>";
        }
        if(precioPlatano <= 1.50){
            echo "Platano<br>";
        }
        if(precioMelon <= 1.50){
            echo "Melon<br>";
        }
    ?>

</body>
</html>