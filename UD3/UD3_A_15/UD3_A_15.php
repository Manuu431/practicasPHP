<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_15</title>
</head>
<body>
    <h1>Codificar Frase</h1>
    <form name="codificar" action="codificado.php" method="post">
        <label for="frase">Frase:</label><br>
        <input type="text" id="frase" name="frase" required><br><br>
        
        <label for="desplazamiento">Desplazamiento:</label><br>
        <input type="number" id="desplazamiento" name="desplazamiento" required><br><br>
        
        <input type="submit" value="Codificar">
    </form>
</body>
</html>
