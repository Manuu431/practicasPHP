<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2.14</title>
</head>
<body>
    <?php
        $hora = 0;
        $minutos = 0;
        for($hora = 0; $hora < 24; $hora++){
            $minutos = 0;
            for($minutos = 0; $minutos < 60; $minutos += 15){
                $periodo = ($hora < 12) ? "AM" : "PM";      //determina si es AM o PM
                $laUna = ($hora == 1 || $hora == 13) ? "Es la " : "Son las "; 

                $horaFormatada = sprintf("%02d:%02d", $hora, $minutos);
                echo $laUna . $horaFormatada . ".<br>";
            }
        }
    ?>
</body>
</html>
