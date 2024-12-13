<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3_A_05</title>
</head>
<body>
    <?php
        $abecedario = range('a', 'z');
        for($i = 0; $i < count($abecedario); $i++){
            echo $abecedario[$i] . " - ";
            echo strtoupper($abecedario[$i]) . "<br>";
        }
    ?>
</body>
</html>