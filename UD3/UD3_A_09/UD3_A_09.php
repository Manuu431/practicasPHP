<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_09</title>
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
    echo "Total: " . number_format($precioTotal, 2);
?>
</body>
</html>