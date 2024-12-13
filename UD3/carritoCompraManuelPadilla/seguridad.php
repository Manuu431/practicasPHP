<?php
session_start();

//comprueba que el usuario esté autenticado
if (!isset($_SESSION["autentificado"]) || $_SESSION["autentificado"] != "SI"){
    header("Location: index.php");
    exit();
}

$fechaUltimoAcceso = $_SESSION["ultimoAcceso"];
$fechaActual = date("Y-n-j H:i:s");
$diferenciaFecha = strtotime($fechaActual) - strtotime($fechaUltimoAcceso);

if ($diferenciaFecha >= 15){
    session_destroy();
    header("Location: index.php");
    exit();
}
?>