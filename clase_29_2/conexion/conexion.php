<?php

// Funciones exclusivas para conexion en php (funcines, POO)

/*

Parametros de mysqli
1- Donde esta alojada la BD ("localhost" en el caso que sea local, por ejemplo con xampp)
2- Usuariode BD (en Xampp es "root" por defecto)
3- Contraseña BD (en Xampp está vacia por defecto)
4- Nombre de BD ()

*/

$conexion = mysqli_connect("localhost","root", "", "cursophp2023"); // guardo el contenido en una variable

echo "probando conexion PHP <br>";

//verifico si la conexion es correcta

if(mysqli_connect_errno()){ // esta funcion preestablecida es TRUE cuando no se conecta
    echo "no se conecto por un error <br> " . mysqli_connect_errno();
}else{
    echo "se conecto de forma correcta <br>";
}





/*

1 - conexion
2 - consulta sql

*/

$query = "SELECT * FROM cursos4";
$consulta = mysqli_query($conexion, $query);

echo "<pre>";
var_dump($consulta);
echo "</pre>";

/*
$con=mysqli_connect('127.0.0.1','root','','freatico') or die ('Error en la conexion');  
    $sql="SELECT * FROM medicion WHERE Nivel>=1.20";  
    $resultado=mysqli_query($con,$sql) or die ('Error en el query database');
*/

//Valida que la consulta esté bien hecha
if($consulta){

  //Ahora valida que la consuta haya traido registros
  if( mysqli_num_rows($consulta) > 0){

    //Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal
    while($fila = mysqli_fetch_array($consulta)){

      //Ahora $fila tiene la primera fila de la consulta, pongamos que tienes
      //un campo en tu DB llamado NOMBRE, así accederías
      //echo $fila['nombre'];
        echo "<br>";
        echo $fila["id_curso"];
        echo "<br>";
        echo $fila["nombre"];
        echo "<br>";
        echo $fila["costo"];
        echo "<br>";
    }

  }

  /*
  //Recuerda liberar la memoria del resultado, 
  mysqli_free_result( $consulta );

  //Si ya no ocupas la conexión, cierrala
  mysqli_close( $conexion );
*/
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

<table class="table">
  <thead>
    <tr>
    <?php

if($consulta){

    //Ahora valida que la consuta haya traido registros
    if( mysqli_num_rows($consulta) > 0){
  
      //Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal
      while($fila = mysqli_fetch_array($consulta)){
  
        //Ahora $fila tiene la primera fila de la consulta, pongamos que tienes
        //un campo en tu DB llamado NOMBRE, así accederías
        //echo $fila['nombre'];
          echo "<br>";
          echo $fila["id_curso"];
          echo "<br>";
          echo $fila["nombre"];
          echo "<br>";
          echo $fila["costo"];
          echo "<br>";
      }
  
    }
  
    /*
    //Recuerda liberar la memoria del resultado, 
    mysqli_free_result( $consulta );
  
    //Si ya no ocupas la conexión, cierrala
    mysqli_close( $conexion );
  */
  }

?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



    
</body>
</html>








<?php
// trabajo con array asociativo apra mejor visualizacion

//$listado = mysqli_fetch_assoc($consulta); // esta funcion transforma la consulta en array asociativo

//$listadoArray = mysqli_fetch_array($consulta);

/*
echo "<pre>";
var_dump($listadoArray);
echo "</pre>";

echo "<br>";
echo $listado["id_curso"];
echo "<br>";
echo $listado["nombre"];
echo "<br>";
echo $listado["costo"];
echo "<br>";
*/
/*
foreach($listadoArray as $valor){
    echo $valor;
}
*/
// tarea 2 - traer de la base de datos en un listado
// https://getbootstrap.com/docs/5.0/content/tables/

?>