<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
    <?php
        include 'crearCookie';

        echo "Al pinchar <a href='crearCookie.php?action=crear'>aquí</a> se creará una cookie<br>";
        echo "Al pinchar <a href='crearCookie.php?action=aumentar'>aquí</a> se creará una cookie y si esta ya existe se incrementará en 1 su valor<br>";

        if(isset($_COOKIE[$cookie_name])){
            echo "La cookie $cookie_name ya existe, su valor es $cookie_value<br>";
        }
        else{
            echo "La cookie todavia no existe<br>";
        }

        echo "Haz click <a href='crearCookie.php?action=eliminar'>aquí</a> para eliminar la cookie";
    ?>

</body>
</html>