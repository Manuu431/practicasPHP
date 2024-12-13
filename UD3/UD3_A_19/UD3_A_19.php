<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_19</title>
</head>
<body>
    <?php
        //directorio que vamos a listar
        $directorio = __DIR__ . '/listar';

        //verifica si el directorio existe
        if(is_dir($directorio)){
            //escanea el directorio
            $archivos = scandir($directorio);

            //filtra los archivos para que solo sean PHP
            $archivos_php = array_filter($archivos, function($archivo) use ($directorio) {
                return is_file($directorio . '/' . $archivo) && pathinfo($archivo, PATHINFO_EXTENSION) === 'php';
            });

            //comprueba si hay archivos PHP en el directorio
            if(count($archivos_php) > 0){
                echo "<h2>Archivos .php en la carpeta 'listar':</h2><ul>";
                
                //muestra la lista de archivos .php
                foreach($archivos_php as $archivo){
                    echo "<li>$archivo</li>";
                }
                
                echo "</ul>";
            }
            else{
                echo "No se encontraron archivos .php en el directorio 'listar'.";
            }
        }
        else{
            echo "El directorio 'listar' no existe.";
        }
    ?>
</body>
</html>
