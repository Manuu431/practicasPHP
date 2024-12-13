<?php
include 'datos.php';

$nombreProducto = $_REQUEST['nombreProducto'] ?? null;

if($nombreProducto !== null) {
    $nombreObjeto = $videoclub->buscarPorNombre($nombreProducto);

    if($nombreObjeto !== null) {
        $nombreObjeto->getDescripcion();
    }
    else{
        echo "Este producto no existe.<br>";
    }
}

echo "<a href='aplicacion.php'>Volver a la página principal</a>";
?>