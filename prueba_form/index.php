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

    <br>

    <table>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>curso</td>

        </tr>


        <?php
        $sql="SELECT * FROM cursos";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
      


        ?>



        <tr>
            <td> <?php echo $mostrar["id"] ?> </td>
            <td> <?php echo $mostrar["nombre"] ?> </td>
            <td> <?php echo $mostrar["apellido"] ?> </td>
            <td> <?php echo $mostrar["curso"] ?> </td>
        </tr>
        
        <?php
        }
        ?>

    </table>
    
</body>
</html>