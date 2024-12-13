<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_18</title>
</head>
<body>
    <?php
        //directorio que vamos a listar
        $directorio = __DIR__ . '/listar'; 

        //verifica si el directorio existe
        if(is_dir($directorio)){
            //escanea el directorio
            $archivos = scandir($directorio);

            //comprueba si hay archivos en el directorio
            if(count($archivos) > 0){
                echo "<h2>Archivos en la carpeta 'listar':</h2><ul>";
                
                //muestra la lista de archivos
                foreach($archivos as $archivo){
                    echo "<li>$archivo</li>";
                }
                
                echo "</ul>";
            }
            else{
                echo "El directorio 'listar' está vacío.";
            }
        }
        else{
            echo "El directorio 'listar' no existe.";
        }
    ?>
</body>
</html>
