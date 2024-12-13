<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.10</title>
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


        if(precioManzana < precioPera){
            echo "La manzana es más barata que la pera<br>";
        }
        else{
            echo "La pera es más barata que la manzana<br>";
        }

        if(precioManzana < precioPlatano){
            echo "La manzana es más barata que el plátano<br>";
        }
        else{
            echo "El plátano es más barato que la manzana<br>";
        }

        if(precioManzana < precioMelon){
            echo "La manzana es más barata que el melón<br>";
        }
        else{
            echo "El melón es más barato que la manzana<br><br>";
        }


        if(precioPera < precioPlatano){
            echo "La pera es más barata que el plátano<br>";
        }
        else{
            echo "El plátano es más barato que la pera<br>";
        }

        if(precioPera < precioMelon){
            echo "La pera es más barata que el melón<br>";
        }
        else{
            echo "El melón es más barato que la pera<br><br>";
        }


        if(precioPlatano < precioMelon){
            echo "El plátano es más barato que el melón<br>";
        }
        else{
            echo "El melón es más barato que el plátano<br>";
        }
    ?>

</body>
</html>