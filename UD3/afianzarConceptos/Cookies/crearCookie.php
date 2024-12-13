<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación cookie</title>
</head>
<body>
    <?php
        $cookie_name = "Manzana";
        $cookie_value;

        if(isset($_GET['action'])){
            $action = $_GET['action'];
    
            // Acción para crear la cookie
            if($action === 'crear'){
                if(isset($_COOKIE[$cookie_name])){
                    echo "La cookie ya está creada<br>";
                }
                else{
                    $cookie_value = 1;
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Crear la cookie por 30 días
                    echo "La cookie '$cookie_name' ha sido creada y su valor es $cookie_value<br>";
                }
            }
            // Acción para aumentar el valor de la cookie si ya existe
            elseif($action === 'aumentar'){
                if(isset($_COOKIE[$cookie_name])){
                    $cookieValorActual = $_COOKIE[$cookie_name];
                    $cookieValorNuevo = $cookieValorActual + 1;
                    setcookie($cookie_name, $cookieValorNuevo, time() + (86400 * 30), "/");
                    echo "La cookie $cookie_name ha sido aumentada, ahora su valor es $cookieValorNuevo<br>";
                }
                else{
                    $cookie_value = 1;
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                    echo "La cookie $cookie_name ha sido creada, su valor es $cookie_value<br>";
                }
                
            }
            // Acción para eliminar la cookie
            elseif ($action === 'eliminar') {
                setcookie($cookie_name, "", time() - 3600, "/"); // Expirar la cookie
                echo "La cookie $cookie_name ha sido eliminada<br>";
            }
        }
    ?>
</body>
</html>