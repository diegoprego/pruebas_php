<?php


// valido que cuando se apriete el boton enviar los campos contengan algo
if (isset($_POST['enviar'])){

    if(strlen($_POST['nombre']) >=1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['tema']) >= 1){
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['email']);
        $tema = trim($_POST['tema']);

        $sqlInsertOradores = "INSERT INTO oradores2(id_orador, nombre, apellido, mail, tema, fecha_alta) VALUES (NULL , '$nombre','$apellido','$email','$tema', NULL)";
        $resultado = mysqli_query($conexion,$sqlInsertOradores);

        return header("Location:admin.php");

/*         if($resultado){
            ?>
            <h3 class="ok">Te has inscripto correctamente!!!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">Ups ha ocurrido un error!!!</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="bad">Por favor complete todos los campos</h3>
        <?php */
    }else{
        return "error";
    }

    
}

?>