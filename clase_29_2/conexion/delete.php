<?php

echo "<h2>Eliminar!!!!</h2>";

require "conexion.php";

//eliminar registro de mi taabla de la BD

$sql_delete = "DELETE FROM alumnos4 WHERE id_alumno =  '5'";
$deleteRegistro = mysqli_query($conexion, $sql_delete);

if ($deleteRegistro){
    echo "se borró de la BD";
}else{
    echo "no se borró el registro";
}



?>