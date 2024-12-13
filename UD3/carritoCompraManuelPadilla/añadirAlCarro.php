<?php include "seguridad.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir al carro</title>
</head>
<body>
    <?php
    include 'datos.php';
    $ref = $_REQUEST['ref'] ?? null;
    $cookie_name =  "carrito";

    if($ref){
        $arrayCarrito = unserialize($_COOKIE["carrito"]);
        if(isset($_COOKIE["carrito"])){
            if(isset($arrayCarrito[$ref])){
                $arrayCarrito[$ref] += 1;
            }
            else{
                $arrayCarrito[$ref] = 1;
            }
        }
        else{
            $arrayCarrito[$ref] = 1; 
        }
        setcookie("carrito", serialize($arrayCarrito), time() + 3600);
    }
    header('Location: tienda.php');
    ?>
</body>
</html>