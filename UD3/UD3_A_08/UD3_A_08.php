<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_08</title>
</head>
<body>
<?php
    //crea el array asociativo
    $personas = [
        "Miguel" => 1.74,
        "Gabi" => 1.80,
        "Manu" => 1.83
    ];

    //recorre el array y muestra el mensaje
    foreach ($personas as $nombre => $altura) {
        echo "$nombre mide $altura m<br>";
    }
?>
</body>
</html>