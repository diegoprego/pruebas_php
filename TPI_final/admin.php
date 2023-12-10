<!-- HEADER + NAV -->
<?php
require "include/php/pages/header.php";
require "include/php/conexion/conexion.php";
?>

<?php 
$counter = 'SELECT COUNT(*) total FROM oradores2';
$result = mysqli_query($conexion,$counter);
$fila = $result->fetch_assoc();
?>


    <div class="container" id="listadoOradores">
        
        <!-- Recuento Oradores en BD -->
        <div id="recuentoOradores">
            <h3 >Cantidad de Oradores: <?php echo $fila['total']?></h3>
        </div>
        
        <!-- Boton Trigger Modal Insertar -->
<!--         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertarOrador">Nuevo Orador</button> -->

        <!-- Tabla Oradores BD -->
        <table class="table" id="tablaOradores">
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
<!--                 <td><button type="button" class="btn btn-success editbtn" data-bs-toggle="modal" data-bs-target="#editarOrador">Editar</button></td>
                <td><button type="button" class="btn btn-success editbtn" data-bs-toggle="modal" data-bs-target="#editarOrador">Editar</button></td> -->
                <td><a href="modificar.php?id_orador=<?php echo $mostrar['id_orador'];?>" class="btn btn-success" role="button">Editar</a></td>
                <td><a href="eliminar.php?id_orador=<?php echo $mostrar['id_orador'];?>" class="btn btn-danger" role="button">Borrar</a></td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>




<!--     <div class="modal fade" id="insertarOrador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Orador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">

                <form action="" method="post">
                    <div class="form-group" >
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md">
                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="First name" name="nombre">
                                </div>
                                <div class="col-md">
                                    <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Correo" aria-describedby="emailHelp" id="campoEmail" name="email">
                        </div>
                        <div class="">
                            <textarea class="form-control" placeholder="Tema" id="floatingTextarea2" style="height: 200px" name="tema"></textarea>
                        </div>
                    </div>                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <!-- Modal Editar-->
    <div class="modal fade" id="editarOrador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Orador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <!-- formulario -->
                <form action="admin.php" method="post">
                    <div class="form-group" >
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md">
                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="First name" name="nombre" id="nombre">
                                </div>
                                <div class="col-md">
                                    <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name" name="apellido" id="apellido" >
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Correo" aria-describedby="emailHelp" id="campoEmail" name="email" id="email" >
                        </div>
                        <div class="">
                            <textarea class="form-control" placeholder="Tema" id="floatingTextarea2" style="height: 200px" name="tema" id="tema"></textarea>
                        </div>
                    </div>                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    </div>


<?php
require "include/php/pages/scripts.php";
?>