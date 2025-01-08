<?php
include "seguridad.php";
include "insert.php";

function validar(){
    if ($_POST['dni'] == null || $_POST['nombre'] == null || $_POST['direccion'] == null
    || $_POST['localidad'] == null || $_POST['provincia'] == null || $_POST['telefono'] == null || $_POST['email'] == null ){
        return false;
    }
    return true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente nuevo</title>
</head>
<body>
    <h3>Cliente nuevo</h3>
    <form method="POST" action="clienteNuevo.php">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni"><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion"><br>
        <label for="localidad">Localidad:</label>
        <input type="text" id="localidad" name="localidad"><br>
        <label for="provincia">Provincia:</label>
        <input type="text" id="provincia" name="provincia"><br>
        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono"><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>
        <label for="email">Permisos:</label>
        <select name="permisos" id="permisos">
            <option value="" selected disabled>Selecciona un tipo de permiso</option>
            <option value="1">Usuario</option>
            <option value="2">Empleado</option>
            <option value="3">Administrador</option>
        </select>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"><br>

        <?php 
        echo "<button type='submit'>Añadir cliente</button><br>";
        echo "<a href='tabla.php'>Volver</a><br>";
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['dni']) && isset($_POST['nombre']) && isset($_POST['direccion']) 
            && isset($_POST['localidad']) && isset($_POST['provincia']) && isset($_POST['telefono'])
            && isset($_POST['email']) && isset($_POST['permisos']) && isset($_POST['password'])) {
                if(!validar()){
                    echo "Todos los campos deben estar llenos";
                }
                else{
                    if(insertarDatos($_POST['dni'], $_POST['nombre'], $_POST['direccion'], $_POST['localidad'], $_POST['provincia'], $_POST['telefono'], $_POST['email'], $_POST['permisos'], $_POST['password'])){
                        header("Location:tabla.php?mensaje=insertok&&nombre={$_POST['nombre']}");
                    }
                    else{
                        echo "No se ha podido conectar con la base de datos, inténtelo más tarde";
                    }
                }
            }
        }
        ?>
    </form>
</body>
</html>