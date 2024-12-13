<?php
include 'seguridad.php';
$_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s"); //actualiza el último acceso al cargar la página
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<style>
    table{
        border: 1px solid black;
        border-collapse: collapse;
        width: 50%;
    }
    tr, td{
        border: 1px solid black;
        border-collapse: collapse;
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
    
    escaparate($nombres, $precios, $descripcion);

    echo "<a href='verCarrito.php'>Ver carrito</a><br>";
    ?>
    <a id="cerrarSesion" href='cerrarSesion.php'>Cerrar sesión</a>
</body>
</html>
