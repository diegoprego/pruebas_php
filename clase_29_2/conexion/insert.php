<?php

echo "Prueba insertar <br><br><br>";

require "conexion.php";


//if(false){

$nombreForm = "Mariana12"; // = $_POST['nombre'] 
$correoForm = "mariana@gmail.com";
$idForm = "7";

$sql_insert = "INSERT INTO alumnos4 (id_alumno,nombre,correo,curso_id) VALUES (NULL,'$nombreForm','$correoForm','$idForm')"; // los parametros de la consulta deben llevar comillas simples
$insertar = mysqli_query($conexion, $sql_insert);

if (!$insertar){
    echo "no inserto en la BD";
}else{
    echo "se conecto de forma correcta";
}

/* }else{
    echo "no se puede dejar el campo vacio";
    header('location: error.php');

} */



/* $conexion = mysqli_connect("localhost","root", "", "cursophp2023"); // guardo el contenido en una variable

echo "probando conexion PHP <br>";

//verifico si la conexion es correcta

if(mysqli_connect_errno()){ // esta funcion preestablecida es TRUE cuando no se conecta
    echo "no se conecto por un error <br> " . mysqli_connect_errno();
}else{
    echo "se conecto de forma correcta <br>";
} */

?>