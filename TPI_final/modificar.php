

<?php
include "include/php/conexion/conexion.php";
$id= $_GET['id_orador'];
$sqlModificar = "SELECT * FROM oradores2 WHERE id_alumnos = '$id'";
$modifica = $conexion->query($sqlModificar);
$dato = $modifica->fetch_array();
?>

<?php
$id= $_GET['id_orador'];
$sqlModificar = "SELECT * FROM oradores2 WHERE id_orador = '$id'";
$modifica = $conexion->query($sqlModificar);
$dato = $modifica->fetch_array();
?>