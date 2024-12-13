<?php
// Array con las opciones del juego
$opciones = ['piedra', 'papel', 'tijera'];

// Obtiene la elección del jugador y de la máquina
$eleccionJugador = isset($_POST['eleccion']) ? $_POST['eleccion'] : '';
$eleccionMaquina = $opciones[array_rand($opciones)];

// Obtiene los contadores de partidas
$ganadas = isset($_REQUEST['ganadas']) ? (int)$_REQUEST['ganadas'] : 0;
$empatadas = isset($_REQUEST['empatadas']) ? (int)$_REQUEST['empatadas'] : 0;
$perdidas = isset($_REQUEST['perdidas']) ? (int)$_REQUEST['perdidas'] : 0;

// Determinar el resultado
if ($eleccionJugador == $eleccionMaquina) {
    $resultado = "<h3>Empate</h3>";
    $empatadas++;
} elseif (
    ($eleccionJugador == 'piedra' && $eleccionMaquina == 'tijera') ||
    ($eleccionJugador == 'papel' && $eleccionMaquina == 'piedra') ||
    ($eleccionJugador == 'tijera' && $eleccionMaquina == 'papel')
) {
    $resultado = "<h3>Ganaste</h3>";
    $ganadas++;
} else {
    $resultado = "<h3>Perdiste</h3>";
    $perdidas++;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
        echo "<h2>Resultado</h2>";
        echo "Tu elección: $eleccionJugador<br>";
        echo "Elección máquina: $eleccionMaquina<br>";
        echo "$resultado";

        echo "<h2>Estadísticas</h2>";
        echo "Partidas ganadas: $ganadas<br>";
        echo "Partidas empatadas: $empatadas<br>";
        echo "Partidas perdidas: $perdidas<br><br>";
    ?>

    <form action="UD3_A_16.php" method="post">
        <input type="hidden" name="ganadas" value="<?= $ganadas ?>">
        <input type="hidden" name="empatadas" value="<?= $empatadas ?>">
        <input type="hidden" name="perdidas" value="<?= $perdidas ?>">
        <input type="submit" value="Jugar de nuevo">
    </form>
</body>
</html>