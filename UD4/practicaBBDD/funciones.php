<?php
include "insert.php";
function conexionDB() {
    try{
        $con = new PDO('mysql:host=localhost;dbname=clientesDB', 'manu', 'manu');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "La conexión ha sido un éxito<br>";
    }
    catch(PDOException $e) {
        echo 'Error: '. $e->getMessage();
    }
}
conexionDB();

insertarDatos();
?>