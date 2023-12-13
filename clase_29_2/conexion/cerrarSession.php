<?php

session_start();

session_destroy();

header("location: conexion.php"); // le pongo que me redirija a otra pagina cuando cierre sesion
echo "<br>";

echo "Session: " . $_SESSION['username'];


?>