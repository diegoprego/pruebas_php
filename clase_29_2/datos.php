<?php

echo "esto es una plantilla para datos";

// GET funcoion global, contiene todo lo que viene del formulario
echo $_GET['nombre'];
echo $_GET['apellido'];
echo $_GET['comentario'];

echo $_POST['nombre'];

echo "<br>";
echo "<br>";

var_dump($_GET); // var_dump sirve para ver todo lo que me trae el metodo GET


//pora opcion para formatear los datos y hacerlos mas legibles
echo "<pre>";
var_dump($_GET);
echo "</pre>";


echo "El nombre de usuario es: " . $_GET['nombre'];


//el metodo isset pregunta si existe el conjunto del atributo de la variable GET con nombre

if(isset($_GET['nombre'])){
    echo "no existe!!";
}


$nombreUsuario = $_GET['nombre'];
$comentarioUsuario = $_GET['comentario'];

echo "<br>";
echo "<br>";

// validacion /filtrado para que haya algo en el campo "nombre"

if($nombreUsuario=="" && isset($_GET['nombre'])){
    echo "Está vacío...ingrese algo";
}else{
    echo "Hay algo en el texto " . $nombreUsuario;
}







/* $nombrecito = $_GET['nombre'];
echo "<br>$nombrecito" */

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>


    <div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
    <h5 class="card-title"><?php echo $nombreUsuario   ?> </h5>
    <p class="card-text"><?php echo $comentarioUsuario   ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>