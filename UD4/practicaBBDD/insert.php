<?php
function insertarDatos(){
    $dniVariable = "23232323F";
    $nombreVariable = "Pablo";
    $direccionVariable = "C/ Ejemplo";
    $localidadVariable = "Pego";
    $provinciaVariable = "Alicante";
    $telefonoVariable = "654654654";
    $emailVariable = "pablo@gmail.com";
    
    try{
        $con = new PDO('mysql:host=localhost;dbname=clientesDB', 'manu', 'manu');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $con-> prepare(
            'INSERT INTO clientes (dni, nombre, direccion, localidad, provincia, telefono, email) VALUES (:dni, :nombre, :direccion, :localidad, :provincia, :telefono, :email)'
        );
    
        $rows = $stmt->execute(array(':dni' => $nombreVariable, ':nombre' => $dniVariable, ':direccion' => $direccionVariable, ':localidad' => $localidadVariable, ':provincia' => $provinciaVariable, ':telefono' => $telefonoVariable, ':email' => $emailVariable));
    
        if( $rows == 1){
            echo 'Inserción correcta';
        }
    }
    catch(PDOException $e) {
        echo 'Error: '. $e->getMessage();
    }
}
?>