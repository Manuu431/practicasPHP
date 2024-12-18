<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #4c83ff, #2d2d2d);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
</style>
<body>
    <form action="login.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" id="user" name="user" required placeholder="Ingresa tu usuario">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required placeholder="Ingresa tu contraseña">

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>