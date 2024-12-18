<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $password = $_POST["password"];

    // Verifica si las credenciales son correctas
    if ($user == "manu" && $password == "manu") {
        // Guarda los datos en la sesión
        $_SESSION["user"] = $user;
        $_SESSION["permisos"] = ""; 

        // Redirige a tabla.php
        header("Location: tabla.php");
        exit();
    } else {
        // Redirige a index.php en caso de error
        header("Location: index.php");
        exit();
    }
}
?>