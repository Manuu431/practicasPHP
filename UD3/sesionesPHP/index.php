<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    
    <?php
        session_start();
        echo 'session_id(): ' . session_id();
        echo "<br />\n";
        echo  'session_name(): ' . session_name();
        echo "<br />\n";
        print_r(session_get_cookie_params());
    ?>
</body>
</html>