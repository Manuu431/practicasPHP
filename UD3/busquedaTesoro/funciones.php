<?php
    function fraseResultado(){
        $intentosRestantes = $_SESSION['intentosMaximos'] - $_SESSION['intentos'];
        if($_SESSION['intentos'] < $_SESSION['intentosMaximos']  && $_SESSION['resultado'] == false){
            echo "Te quedan $intentosRestantes intentos.<br><br>";
        }
        else if($_SESSION['intentos'] == $_SESSION['intentosMaximos']  && $_SESSION['resultado'] == false){
            echo "Has agotado todos tus intentos!<br><br>";
        }
        else if($_SESSION['resultado'] == true){
            echo "Has ganado!<br><br>";
        }
        else if($_SESSION['resultado'] == false){
            echo "Has perdido!<br><br>";
        }
    }

    function crearTabla(){
        $posicion = 1;
        
        echo "<table>";
        for($i = 0; $i < 10;  $i++){
            echo "<tr>";
            for($j = 0; $j < 10;  $j++){
                // Usa el color de fondo almacenado en la sesión
                $color = $_SESSION['colorFondo'][$posicion] ?: '#007bff'; // Color por defecto blanco si no está definido
                echo "<td>
                <a href='click.php?posicion=$posicion' id='casillaBoton' style='background-color: $color;'>x</a></td>";
                $posicion++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>