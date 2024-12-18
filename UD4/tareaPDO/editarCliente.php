<?php
include "seguridad.php";
include "funciones.php";

function validar(){
    if ($_POST['dni'] == null || $_POST['nombre'] == null || $_POST['direccion'] == null
    || $_POST['localidad'] == null || $_POST['provincia'] == null || $_POST['telefono'] == null || $_POST['email'] == null ){
        return false;
    }
    return true;
}

$dni = $_REQUEST['dni'];
$cliente = encontrarCliente($dni);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (validar()) {
        // Modificar el cliente en la base de datos
        $clienteModificado = modificarCliente(
            $_POST['dni'], 
            $_POST['nombre'], 
            $_POST['direccion'], 
            $_POST['localidad'], 
            $_POST['provincia'], 
            $_POST['telefono'], 
            $_POST['email']
        );
        if($clienteModificado){
            header('Location: index.php?mensaje=modificarok');
            //header("Location:index.php?mensaje=modificarok&&dni={$_POST['dni']}
            //&&nombre={$_POST['nombre']}&&direccion={$_POST['direccion']}&&localidad={$_POST['localidad']}
            //&&provincia={$_POST['provincia']}&&telefono={$_POST['telefono']}&&email={$_POST['email']}");

            // header("Location: index.php?mensaje=modificarok&&$cadena");
        }
        else {
            echo "<p>Error: No se pudo modificar el cliente. Inténtelo más tarde.</p>";
        }
    } else {
        echo "<p>Error: Todos los campos deben estar llenos.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar cliente</title>
</head>
<body>
    <h3>Modificar cliente</h3>
    <form method="POST" action="editarCliente.php?dni=<?php echo $dni; ?>">
        <label for="dni">DNI:</label>
        <input value='<?php echo $cliente->getDni()?>' type="text" id="dni" name="dni_mostrar" disabled='true'><br>
        <input value='<?php echo $cliente->getDni()?>' type="hidden" id="dni" name="dni">
        <label for="nombre">Nombre:</label>
        <input value='<?php echo $cliente->getNombre()?>' type="text" id="nombre" name="nombre"><br>
        <label for="direccion">Direccion:</label>
        <input value='<?php echo $cliente->getDireccion()?>' type="text" id="direccion" name="direccion"><br>
        <label for="localidad">Localidad:</label>
        <input value='<?php echo $cliente->getLocalidad()?>' type="text" id="localidad" name="localidad"><br>
        <label for="provincia">Provincia:</label>
        <input value='<?php echo $cliente->getProvincia()?>' type="text" id="provincia" name="provincia"><br>
        <label for="telefono">Telefono:</label>
        <input value='<?php echo $cliente->getTelefono()?>' type="text" id="telefono" name="telefono"><br>
        <label for="email">Email:</label>
        <input value='<?php echo $cliente->getEmail()?>' type="text" id="email" name="email"><br>
        <button type="submit">Guardar cliente</button>
    </form>
    <br>
    <a href='index.php'>Volver</a>
</body>
</html>