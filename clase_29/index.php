<?php

//no olvidar los ; al final de cada linea

echo "<h1>hola mundo PHP</h1>";

echo "<br>";

echo "5"+true;

echo "<br>";

//las variables se declaran con $

$nombre = "Alejandro";
$numeroA = 15;
$numeroB = 10;

echo "<h1>probando variables</h1><br>";

// para concatenar se usa el punto .

echo $nombre . "<br>";
echo $numeroA + $numeroB  . "<br>";

$sumavalores = $numeroA + $numeroB;
$apellido = "Tedesco";

echo "<br><h2>Esto es suma valores {$sumavalores}</h2>";

if($apellido == "Tedesco"){

    echo "Esto es un if verdadero";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Hola esto es HTML</h1>

<script>

console.log("Hola mundo JS")

</script>

</body>
</html>
