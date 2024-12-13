<?php
function insertarDatos($dniVariable, $nombreVariable, $direccionVariable, $localidadVariable, $provinciaVariable, $telefonoVariable, $emailVariable) {
    try{
        $con = new PDO('mysql:host=localhost;dbname=clientesDB', 'manu', 'manu');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $con-> prepare(
            'INSERT INTO clientes (dni, nombre, direccion, localidad, provincia, telefono, email) VALUES (:dni, :nombre, :direccion, :localidad, :provincia, :telefono, :email)'
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
?>