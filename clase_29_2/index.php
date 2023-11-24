<?php

    echo "¡Hola, soy un script de PHP!";

    echo "<br>";

// OPERADOR TERNARIO

// (evalua lo que està entreparentesis, si es True devuelve el primer mensaje, si es False el segundo)
// sierve si solo hay 2 resultados posibles ya que se escribe en una sola linea

$promedio = 7;

$resultadoTernario = ($promedio >6)?"Es Mayor":"Es Menor"; 

    echo $resultadoTernario;

// es lo mismo que un if/else

    echo "<br>";


// FOREACH
// sirve para recorrer todo el array de punta a punta
//tiene sus limitaciones

    echo "<h2> Array en PHP</h2>";
    echo "<br>";

$arrayPHP = ["mariano","alicia","juan","marta","alicia"];

    echo $arrayPHP[0];

    echo "<br>";

    foreach($arrayPHP as $unidad){

        echo "mi nombre es: ". $unidad ."<br>";
    }

    foreach($arrayPHP as $i=>$unidad){

        echo "mi nombre es: ". $unidad ." y su indice es " .$i . "<br>";
    }

for($indice = 0; $indice<10; $indice++){

        //$arrayPHP
        //$arrayApellidos
}


// foreach hace un recorrido por la variable, y cada elemento que encuentra lo guarda en una variable


// ARRAY ASOCIATIVOS

//clave/valor
//directamente busco segun el valor que necesito (columna) no hace falta saber el indice

echo "<h2>Array Asociativos</h2>";

$personaje1 = [
//  key       valor
    "nombre"=>"mariano",
    "apellido"=>"perez",
    "edad"=>35,
    "aprobado"=>true
];


$personaje2 = [
    //  key       valor
        "nombre"=>"jorge",
        "apellido"=>"morales",
        "edad"=>28,
        "aprobado"=>false
    ];


$personaje3 = [
    //  key       valor
        "nombre"=>"daniela",
        "apellido"=>"martinez",
        "edad"=>32,
        "aprobado"=>true
    ];



echo "<br>";

echo $personaje1["nombre"];
echo $personaje1["apellido"];
echo $personaje2["edad"];
echo $personaje3["aprobado"];

echo "<br>";
echo "<br>";
echo "<br>";


// recorro el array asociativo (el foreach es lo mejor para recorrerlo)

foreach($personaje3 as $key=>$valor){

    echo "$key: $valor<br>";
}


// puedo recorrer con un for? ver como tarea
for($i=0;$i<3;$i++){

}

echo "<br>";
echo "<br>";
echo "<br>";

?>


<?php
$hola = $_SERVER['HTTP_USER_AGENT'];
echo $hola;

echo "<br>";
echo "<br>";
echo "<br>";


$nombreUsuario = "Diego";
$edad = 19;
$membresia="gold"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP y HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<h1>Hola esto es HTML y PHP</h1>



<h2>Hola mi nombre es: <?php echo $nombreUsuario ?> </h2>
<h2>Edad: <?php echo $edad ?> </h2>

<?php
if ($edad>18 && $nombreUsuario==="Diego" && $membresia==="gold"){
?>

    <div class="alert alert-primary" role="alert">
    Es mayor!!
    </div>

<?php
}else{
?>

    <div class="alert alert-success" role="alert">
    Es menor!!
    </div>

<?php
}
?>

<div class="container">

<form action="datos.php" method="get">

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name="nombre">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apellido" name="apellido">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Texto</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario"></textarea>
    </div>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
</form>

</div>



</body>
</html>