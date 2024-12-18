<?php
session_start();

//comprueba que el usuario esté autenticado
if (!isset($_SESSION["user"])){
    header("Location: index.php");
    exit();
}
?>