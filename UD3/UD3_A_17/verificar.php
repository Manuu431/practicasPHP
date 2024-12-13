<?php
// Incluimos el archivo con los usuarios
include('usuarios.php');

// Verificamos que los datos han sido recibidos
if(isset($_POST['nombre']) && isset($_POST['contraseña'])) {
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    // Comprobamos si el usuario está en el array y si la contraseña es correcta
    if(array_key_exists($nombre, $usuarios) && $usuarios[$nombre] == $contraseña){
        // Si es correcto, guardamos en accesos.txt
        $log = "El usuario $nombre ha accedido al sistema.\n";
        file_put_contents('accesos.txt', $log, FILE_APPEND); // Guardamos el acceso en accesos.txt
        header('Location: ok.php'); // Redirigimos a ok.php
        exit(); // Nos aseguramos de que se detiene la ejecución después de redireccionar
    }
    else{
        // Si la contraseña o el usuario no son correctos
        $log = "Intento fallido de acceso del usuario $nombre.\n";
        file_put_contents('accesos.txt', $log, FILE_APPEND); // Guardamos el intento fallido
        header('Location: error.html'); // Redirigimos a error.html
        exit(); // Detenemos la ejecución después de redireccionar
    }
}
else{
    // Si los datos no han sido enviados correctamente
    echo "Por favor, complete el formulario.";
}
?>
