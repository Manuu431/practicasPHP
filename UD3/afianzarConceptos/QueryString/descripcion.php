<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripción del producto</title>
</head>
<body>
    <?php
        include 'datos.php';
        $nombreProducto = $_GET['nombre'];

        $precioProducto = $precios[$nombreProducto];
        $descripcionProducto = $descripcion[$nombreProducto];

        echo "<a href='main.php'>Página principal</a><br>";
        echo $nombreProducto . " - " . $precioProducto . " - " . $descripcionProducto;
    ?>
</body>
</html>