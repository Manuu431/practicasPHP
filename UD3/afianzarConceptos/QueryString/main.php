<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<style>
    table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
        width: 500px;
    }
</style>
<body>
    
<?php
    include 'datos.php';

    echo "
    <table>
        <tr>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Descripción</td>
        </tr>
    ";
    
    foreach ($precios as $nombre => $precio){
        if (isset($descripcion[$nombre])) {
            $descripcionProducto = $descripcion[$nombre];
            echo "
            <tr>
                <td><a target='_blank' href='descripcion.php?nombre=$nombre'>$nombre</a></td>
                <td>$precio</td>
                <td>$descripcionProducto</td>
            </tr>
            ";
        }
    }
    echo "</table>";
?>

</body>
</html>