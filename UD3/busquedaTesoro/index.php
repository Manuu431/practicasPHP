<?php
session_start();

include 'funciones.php';

if (!isset($_SESSION['colorFondo'])) {
    $_SESSION['colorFondo'] = array_fill(1, 100, ''); 
}

if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

if (!isset($_SESSION['intentosMaximos'])) {
    $_SESSION['intentosMaximos'] = 5;
}

if (!isset($_SESSION['resultado'])) {
    $_SESSION['resultado'] = false;
}

if(!isset($_SESSION['casillaTesoro'])){
    $_SESSION['casillaTesoro'] = rand(1, 100);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda tesoro</title>
    <link href="styles.css">
</head>
<style>
    td{
        width: 6em;
    }
    #casillaBoton{
        display: inline-block; 
        padding: 0.5em 1em 0.5em 1em; 
        background-color: #007bff; 
        color: black; 
        text-decoration: none; 
        border-radius: 0.4em;
        display: flex;
        justify-content: center;
    }
    #contTabla{
        display: flex;
        justify-content: center;
        
        width: 100%;
    }
    table{
        border: 0.2em solid black;
        border-radius: 0.4em;
        width: 80%;
        margin: auto;
    }
    tr, td{
        border-collapse: collapse;
    }
</style>
<body>
    <h1>Búsqueda tesoro</h1>
    <p>¡Bienvenido a la búsqueda del tesoro!</p>

    <?php
        echo "El tesora está en la casilla " . $_SESSION['casillaTesoro'] . ".<br>";
        fraseResultado();
    ?>
    <div id="contTabla">
        <div>
            <?php
                crearTabla();
            ?>
        </div>
    </div>
    <?php
        echo "<p><a href='reset.php'>Resetear juego</a></p>";
    ?>
</body>
</html>