<?php
include 'cripto.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $frase = $_POST['frase'];
    $desplazamiento = $_POST['desplazamiento'];     //comprueba que el numero es entero

    //llamamos a la función codificar() creada en cripto.php
    $frase_codificada = codificar($frase, $desplazamiento);

    echo "<h1>Resultado de la Codificación</h1>";
    echo "<p>Frase original: $frase</p>";
    echo "<p>Frase codificada: $frase_codificada</p>";
}
else{
    echo "<p>No se han recibido datos del formulario.</p>";
}
?>