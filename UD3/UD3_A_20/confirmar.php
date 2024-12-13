<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $directorio = 'descargas/';
        $archivo = $_FILES['archivo'];

        // Verifica si el directorio existe, si no, lo crea
        if(!is_dir($directorio)){
            mkdir($directorio);
        }

        // Mueve el archivo a la carpeta de descargas
        if(move_uploaded_file($archivo['tmp_name'], $directorio . $archivo['name'])){
            $mensaje = "El archivo ha sido subido correctamente.<br>";
            $mensaje .= "Nombre: " . $archivo['name'] . "<br>";
        }
        else{
            $mensaje = "Error al subir el archivo.";
        }
    }
    else{
        $mensaje = "No se ha enviado ningún archivo.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Subida</title>
</head>
<body>
    <h1>Confirmación de Subida</h1>
    <?php 
        echo $mensaje;
    ?>
    <br>
    <a href="subir.php">Subir otro archivo</a><br>
    <a href="listar.php">Listar archivos</a>
</body>
</html>
