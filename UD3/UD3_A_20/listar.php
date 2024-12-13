<?php
$directorio = 'descargas/';
$archivos = array_diff(scandir($directorio), array('..', '.'));     //filtra los archivos para que no aparezcan "." ni ".."
sort($archivos);                                                    //ordena los archivos alfabéticamente
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Archivos</title>
</head>
<body>
    <h1>Lista de Archivos</h1>
    <ul>
        <?php
            foreach ($archivos as $archivo) {
                echo "<li>$archivo<br>";
            }
        ?>
    </ul>
    <br>
    <a href="subir.php">Subir un archivo</a>
    <br>
    <a href="UD3_A_20(index).php">Volver al inicio</a>
</body>
</html>
