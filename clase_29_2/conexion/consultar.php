<?php
session_start();
require "conexion.php";

$consultarListado = mysqli_query($conexion, "select * from alumnos4");
$listado = mysqli_fetch_all($consultarListado, MYSQLI_ASSOC);

echo "<br>";

echo "variable simple: " . $usuarioSimple;

echo "<br>";

echo "Session: " . $_SESSION['username'];

// hasta acá da error porque las variables definidas en sesion.php en este archivo no existen, y no es recomendable usar un require

// para solucionarlo hay que inicializar la sesion con session_start();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="cerrarSession.php">C</a>



</body>
</html>