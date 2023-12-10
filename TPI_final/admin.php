<!-- HEADER + NAV -->
<?php
require "include/php/pages/header.php";
require "include/php/conexion/conexion.php"
?>

<?php 
$counter = 'SELECT COUNT(*) total FROM oradores2';
$result = mysqli_query($conexion,$counter);
$fila = $result->fetch_assoc();

?>



<div class="container" id="listadoOradores">
        <div id="recuentoOradores">
            <h3 >Cantidad de Oradores: <?php echo $fila['total']?>   </h3>
        </div>    
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Tema</th>
                <th scope="col">Fecha de Alta</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
                </tr>
            </thead>

            <?php
            $sql="SELECT * FROM oradores2";
            $resultOradores=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($resultOradores)){
            ?>

            <tbody>
                <tr>
                <th scope="row"> <?php echo $mostrar["id_orador"] ?> </th>
                <td><?php echo $mostrar["nombre"] ?></td>
                <td><?php echo $mostrar["apellido"] ?></td>
                <td><?php echo $mostrar["mail"] ?></td>
                <td><?php echo $mostrar["tema"] ?></td>
                <td><?php echo $mostrar["fecha_alta"] ?></td>
                <td><button class="btn btn-secondary">Editar</button></td>
                <td><button class="btn btn-primary">Eliminar</button></td>
                </tr>
            </tbody>



            <?php
            }
            ?>

        </table>
    </div>