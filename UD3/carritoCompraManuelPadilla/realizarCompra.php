<?php
    setcookie("carrito", "", time() - 3600);
    header('Location: tienda.php');
?>
