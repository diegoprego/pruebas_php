<?php

session_start(); // creo la funcion al principio, luego verifica los datos

echo "Sesion";

$usuarioSimple = "miguel";
// se puede guardar nombre de usiario o correo (no se recomienda para password, datos de tarjetas etc) porque al estar en cookies se pueden capturar

// variable global SESSION (como _GET o _POST)

$_SESSION['username'] = "Mariana";
$_SESSION['correo'] = "mariana@gmail.com";
$_SESSION['nivel'] = "3 estrellas";

// variable global y le qçindico los atributos que necesito, en este caso ahrdcodeo el nombre Mariana
// luego se puede guardar la caja de un login con el metodo post

echo "<br>";

echo "variable simple: " . $usuarioSimple;

echo "<br>";

echo "Session: " . $_SESSION['username'];
?>