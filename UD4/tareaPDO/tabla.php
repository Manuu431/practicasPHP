<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include "funciones.php";

conexionDB();

// insertarDatos("23232324F", "Pablo", "C/ Ejemplo", "Pego", "Alicante", "654654654", "pablo@gmail.com");
// insertarDatos("23232325F", "Pablo", "C/ Ejemplo", "Pego", "Alicante", "654654654", "pablo@gmail.com");
?>
<table>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Localidad</th>
        <th>Provincia</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th class='editar'>Editar</th>
        <th class='borrar'>Borrar</th>
    </tr>
<?php crearTabla();?>
</table>

<?php
if(isset($_REQUEST["mensaje"])){
    if($_REQUEST["mensaje"] == "insertok"){
        echo "El cliente llamado {$_REQUEST['nombre']} ha sido insertado correctamente.<br>";
    }
    else if($_REQUEST["mensaje"] == "modificarok"){
        echo "El cliente ha sido guardado correctamente.<br>";
    }
    else if($_REQUEST["mensaje"] == "borrar"){
        if(isset($_REQUEST["dni"])){
            $dni = $_REQUEST["dni"];
            if(eliminarCliente($dni)){
                header("Location: index.php?mensaje=borrarSi");
            }
            else{
                echo "El cliente no ha sido eliminado.<br>";
            }
        }
    }
    else if($_REQUEST["mensaje"] == "borrarSi"){
        echo "El cliente ha sido eliminado correctamente.<br>"; 
    }
}
echo "<a href='clienteNuevo.php'><button class='nuevoCliente'>Nuevo cliente</button></a><br><br>";
echo "<a href='index.php'><button class='nuevoCliente'>Cerrar sesión</button></a>";
?>
</body>
</html>