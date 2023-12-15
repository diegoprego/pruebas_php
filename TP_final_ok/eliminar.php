<?php

include "include/php/conexion/conexion.php";
$id = $_GET['id_orador'];
$sqlEliminar = "DELETE FROM oradores WHERE id_orador = '$id' ";
$elimina = $conexion->query($sqlEliminar);
header("location:admin.php");
$conexion->close();

?>