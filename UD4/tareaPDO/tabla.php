<?php
include "seguridad.php";
include "funciones.php";

if (!isset($_SESSION['mostrar'])) {
    $_SESSION['mostrar'] = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="clientesEliminados.php?mostrar=si">
        <button>Mostrar clientes eliminados</button>
    </a>
    <a href="clientesEliminados.php?mostrar=no">
        <button>Mostrar clientes</button>
    </a>
    
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Localidad</th>
            <th>Provincia</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Permisos</th>
            <th>Borrado</th>
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
                    header("Location: tabla.php?mensaje=borrarSi");
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
    ?>
    <a href="clienteNuevo.php">
        <button>Nuevo cliente</button>
    </a>

    <a href='cerrarSesion.php'>
        <button class='borrar'>Cerrar sesión</button>
    </a>
</body>
</html>