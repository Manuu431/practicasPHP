<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_10</title>
</head>
<body>
<?php
    //crea el array asociativo de precios por kilogramo
    $precioKg = [
        "Manzana" => 3,
        "Pera" => 2,
        "Platano" => 1,
        "Melon" => 4
    ];

    //crea el array asociativo de precios totales de la lista de compra
    $listaCompra = [
        "Manzana" => 3.42,
        "Pera" => 4.31,
        "Platano" => 5.16,
        "Melon" => 2.67
    ];
    $precioTotal = 0;

    echo "Producto - Precio/Kg - Peso - Precio total<br><br>";

    echo "Euros<br>";

    //recorre el array y muestra el mensaje
    foreach ($precioKg as $nombre => $precio) {
        //verifica si el elemento está en la lista de compra
        if (isset($listaCompra[$nombre])) {
            $peso = $listaCompra[$nombre];          //obtiene el peso (precio total de la lista)
            $precioFruta = $precio * $peso;         //calcula el precio correspondiente
            
            echo "$nombre - $precio - $peso - " . number_format($precioFruta, 2) . "<br>";
            
            $precioTotal += $precioFruta;
        }
    }
    echo "Total: " . number_format($precioTotal, 2) . "<br><br>";


    echo "Pesetas<br>";

    //recorre el array y muestra el mensaje
    foreach ($precioKg as $nombre => $precio) {
        //verifica si el elemento está en la lista de compra
        if (isset($listaCompra[$nombre])) {
            $peso = $listaCompra[$nombre];          //obtiene el peso (precio total de la lista)
            $precioFruta = $precio * $peso;         //calcula el precio correspondiente
            
            echo "$nombre - " . number_format(euros_a_pesetas($precio)) . "- $peso - " . number_format(euros_a_pesetas($precioFruta), 2) . "<br>";
            
            $precioTotal += euros_a_pesetas($precioFruta);
        }
    }
    echo "Total: " . number_format($precioTotal, 2);

    function pesetas_a_euros($pesetas){
        $euros = $pesetas / 166368;
        return $euros;
    }

    function euros_a_pesetas($euros){
        $pesetas = $euros * 166368;
        return $pesetas;
    }
?>
</body>
</html>