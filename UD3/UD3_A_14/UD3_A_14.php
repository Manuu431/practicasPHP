<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_14</title>
</head>
    <body>
        <h1>Elige tu signo del zodiaco</h1>
        <form action="horoscopo.php" method="post">
            <label for="signo">Elige tu signo:</label>
            <select name="signo" id="signo" required>
                <option value="">--Selecciona un signo--</option>
                <option value="Aries">Aries</option>
                <option value="Tauro">Tauro</option>
                <option value="Géminis">Géminis</option>
                <option value="Cáncer">Cáncer</option>
                <option value="Leo">Leo</option>
                <option value="Virgo">Virgo</option>
                <option value="Libra">Libra</option>
                <option value="Escorpio">Escorpio</option>
                <option value="Sagitario">Sagitario</option>
                <option value="Capricornio">Capricornio</option>
                <option value="Acuario">Acuario</option>
                <option value="Piscis">Piscis</option>
            </select>
            <br>
            <br>
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>