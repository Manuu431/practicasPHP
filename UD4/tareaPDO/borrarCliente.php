<?php
include "seguridad.php";
include "funciones.php";

$dni = $_REQUEST['dni'];
$cliente = encontrarCliente($dni);

echo "<p>Estás seguro de que quieres borrar el usuario {$cliente->getNombre()}?</p><br>";
echo "<a href='tabla.php?mensaje=borrar'><button>Cancelar</button></a> ";
echo "<a href='tabla.php?mensaje=borrar&&dni={$cliente->getDni()}'><button>Aceptar</button></a>";
?>