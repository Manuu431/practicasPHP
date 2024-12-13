<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Has cerrado sesión</title>
</head>
<body>
    <p>Has cerrado sesión.</p>
    <a href="index.php">Volver a iniciar sesión</a>
</body>
</html>