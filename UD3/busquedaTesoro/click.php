<?php
    include "funciones.php";
    session_start(); // Inicia la sesión para acceder a las variables de sesión
    $posicion = $_REQUEST['posicion'] ?? null;

    if($_SESSION['intentos'] < $_SESSION['intentosMaximos'] && $_SESSION['resultado'] != true){
        if ($_SESSION['casillaTesoro'] == $posicion) {
            $_SESSION['colorFondo'][$posicion] = 'green'; // Asigna color verde si encuentra el tesoro
            $_SESSION['resultado'] = true;
        }
        else if($_SESSION['colorFondo'][$posicion] != 'red'){
            $_SESSION['colorFondo'][$posicion] = 'red'; // Asigna color rojo si no es la posición del tesoro
            $_SESSION['intentos']++;
        }
    }
    else if($_SESSION['intentos'] == $_SESSION['intentosMaximos']){
        $_SESSION['resultado'] = false;
    }
    header('Location: index.php');
    exit();
?>
