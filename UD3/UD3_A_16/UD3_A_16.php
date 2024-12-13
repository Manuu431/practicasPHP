<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_16</title>
</head>
<body>
    <h2>Juguemos a Piedra, Papel o Tijera</h2>
    <form action="resultado.php" method="post">
        <label for="eleccion">Elige:</label>
        <select name="eleccion" id="eleccion">
            <option value="piedra">Piedra</option>
            <option value="papel">Papel</option>
            <option value="tijera">Tijera</option>
        </select>
        <br><br>
        
        <!-- Campos ocultos para guardar los resultados y enviarlos -->
        <input type="hidden" name="ganadas" value="<?= isset($_REQUEST["ganadas"]) ? $_REQUEST["ganadas"] : 0 ?>">
        <input type="hidden" name="empatadas" value="<?= isset($_REQUEST["empatadas"]) ? $_REQUEST["empatadas"] : 0 ?>">
        <input type="hidden" name="perdidas" value="<?= isset($_REQUEST["perdidas"]) ? $_REQUEST["perdidas"] : 0 ?>">

        <input type="submit" value="Jugar">
    </form>
</body>
</html>