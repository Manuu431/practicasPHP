<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.11</title>
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

        $precioTotalManzana = precioManzana * $pesoManzana;
        $precioTotalPera = precioPera * $pesoPera;
        $precioTotalPlatano = precioPlatano * $pesoPlatano;
        $precioTotalMelon = precioMelon * $pesoMelon;

        $precioTotal =  
        $precioTotalManzana + 
        $precioTotalPera + 
        $precioTotalPlatano + 
        $precioTotalMelon;

        $fruta = "pera";
        switch($fruta){
            case "manzana":
                echo "Manzana: " . $precioTotalManzana;
            break;
            case "pera":
                echo "Pera: " . $precioTotalPera;
            break;
            case "platano":
                echo "Platano: " . $precioTotalPlatano;
            break;
            case "melon":
                echo "Melon: " . $precioTotalMelon;
            break;
            default:
                echo "No quedan existencias de esta fruta.";
        }
    ?>

</body>
</html>