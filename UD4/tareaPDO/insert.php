<?php
function insertarDatos($dniVariable, $nombreVariable, $direccionVariable, $localidadVariable, $provinciaVariable, $telefonoVariable, $emailVariable, $permisosVariable, $passwordVariable) {
    try{
        $con = new PDO('mysql:host=localhost;dbname=clientesDB', 'manu', '03w5Qk$7v');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $con-> prepare(
            'INSERT INTO clientes (dni, nombre, direccion, localidad, provincia, telefono, email, permisos, password, borrado) VALUES (:dni, :nombre, :direccion, :localidad, :provincia, :telefono, :email, :permisos, :password, :borrado)'
        );
    
        $rows = $stmt->execute(array(
            ':dni' => $dniVariable, 
            ':nombre' => $nombreVariable, 
            ':direccion' => $direccionVariable, 
            ':localidad' => $localidadVariable, 
            ':provincia' => $provinciaVariable, 
            ':telefono' => $telefonoVariable, 
            ':email' => $emailVariable,
            ':permisos' => $permisosVariable,
            ':password' => $passwordVariable,
            ':borrado' => 0));
    
        if( $rows == 1){
            return true;
        }
    }
    catch(PDOException $e) {
        echo $e;
    }
}
?>