<?php

    $conexion=mysqli_connect("localhost","root","","pruebas");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mostrar datos</title>
</head>
<body>

<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Curso</th>
      <th scope="col"></th>
    </tr>
  </thead>

        <?php
        $sql="SELECT * FROM cursos";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
        ?>

  <tbody>
    <tr>
      <th scope="row"> <?php echo $mostrar["id"] ?> </th>
      <td><?php echo $mostrar["nombre"] ?></td>
      <td><?php echo $mostrar["apellido"] ?></td>
      <td><?php echo $mostrar["curso"] ?></td>
      <td><button>Eliminar</button></td>
    </tr>
  </tbody>



        <?php
        }
        ?>

</table>
</div>
    
</body>
</html>