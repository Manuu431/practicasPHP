<?php
include "insert.php";
include "cliente.class.php";
function conexionDB() {
    try{
        $con = new PDO('mysql:host=localhost;dbname=clientesDB', 'manu', '03w5Qk$7v');
        // $con = new PDO('mysql:host=192.168.122.1;dbname=clientes_db', 'jefe', 'jefe');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "La conexión ha sido un éxito.<br>";
    }
    catch(PDOException $e) {
        echo 'Error: '. $e->getMessage();
    }
}

function cerrarConexionDB($con) {
    // Cerrar la conexión explícitamente asignando el objeto PDO a null
    $con = null;
    echo "Conexión cerrada.<br>";
}

function retClientes(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=clientesDB', 'manu', '03w5Qk$7v');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $pdo->prepare('SELECT * FROM clientes');

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cliente');

        $usuarios = $stmt->fetchAll();
        return $usuarios;
    }
    catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    finally{
        // Cerrar la conexión
        $pdo = null; // Esto cierra explícitamente la conexión
    }
}

function crearTabla(){
    $usuarios = retClientes();
    foreach($usuarios as $usuario){
        echo $usuario;
    }
}

function encontrarCliente($dni){
    $usuarios = retClientes();
    foreach($usuarios as $usuario){
        if($usuario->getDni() == $dni){
            return $usuario;
        }
    }
}

function modificarCliente($dniVariable, $nombreVariable, $direccionVariable, $localidadVariable, $provinciaVariable, $telefonoVariable, $emailVariable) {
    try{
        $con = new PDO('mysql:host=localhost;dbname=clientesDB', 'manu', '03w5Qk$7v');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $con-> prepare(
            'UPDATE clientes SET nombre = :nombre, direccion = :direccion, localidad = :localidad, provincia = :provincia, telefono = :telefono, email = :email WHERE dni = :dni'
        );
    
        $rows = $stmt->execute(array(
            ':dni' => $dniVariable, 
            ':nombre' => $nombreVariable, 
            ':direccion' => $direccionVariable, 
            ':localidad' => $localidadVariable, 
            ':provincia' => $provinciaVariable, 
            ':telefono' => $telefonoVariable, 
            ':email' => $emailVariable));    
        if( $rows == 1){
            return true;
        }
    }
    catch(PDOException $e) {
        return false;
    }
}

function eliminarCliente($dniVariable) {
    try{
        $con = new PDO('mysql:host=localhost;dbname=clientesDB', 'manu', '03w5Qk$7v');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $con-> prepare(
            'DELETE FROM clientes WHERE dni = :dni'
        );
    
        $rows = $stmt->execute(array(':dni' => $dniVariable));
        if( $rows == 1){
            return true;
        }
    }
    catch(PDOException $e) {
        return false;
    }
}
?>