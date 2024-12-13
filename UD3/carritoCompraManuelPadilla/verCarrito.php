<?php include "seguridad.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver carrito</title>
</head>
<style>
    table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
        width: 500px;
        
    }
    #cerrarSesion{
        position:  absolute;
        top: 10px;
        right: 10px;
    }
</style>
<body>
    <?php
    include 'datos.php';
    include 'funciones.php';
    if(isset($_COOKIE['carrito'])){
        $carrito = unserialize($_COOKIE['carrito']);
        mostrar_carrito($carrito);
    }
    else{
        echo "Todavía no has comprado nada<br>";
    }
   
    echo "<a href='tienda.php'>Seguir comprando</a><br>";
    echo "<a href='realizarCompra.php'>Realizar compra</a><br>";
    ?>
    <a id="cerrarSesion" href='cerrarSesion.php'>Cerrar sesión</a>
</body>
</html>