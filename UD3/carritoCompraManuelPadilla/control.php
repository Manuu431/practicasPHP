<?php
session_start();
// Verifica si el usuario y la contraseña son válidos
if ($_POST["usuario"] == "miguel" && $_POST["contrasena"] == "qwerty"){
    $_SESSION["autentificado"] = "SI";
    $_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s"); // Inicia la sesión de actividad
    header("Location: tienda.php");
}
else{
    header("Location: index.php?errorusuario=si");
}
?>