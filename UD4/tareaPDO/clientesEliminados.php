<?php
session_start();
// if(isset($_POST["mostrar"])){
// }
if($_GET["mostrar"] == "si"){
echo $_GET['mostrar'];

    $_SESSION['mostrar'] = "no";
echo $_SESSION['mostrar'];

    header("Location: tabla.php");
}
elseif($_GET["mostrar"] == "no"){
echo $_GET['mostrar'];

    $_SESSION['mostrar'] = "si";
echo $_SESSION['mostrar'];

    header("Location: tabla.php");
}
?>