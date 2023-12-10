<div class="container">
  <div id="formulario" class="center-content">
    <p> <small> CONVIÉRTETE EN UN</small></p>
    <h3>ORADOR</h3>
    <p>Anótate como orador para dar una <a href="#">charla ignite</a>. Cuéntanos de qué quieres hablar!</p>
  </div>
</div>

<form method="post" action="">
    <div class="container">
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
        <textarea class="form-control" placeholder="Sobre qué quieres hablar?" id="floatingTextarea2" style="height: 200px" name="tema"></textarea>
    </div>
    <div id="emailHelp" class="form-text">Recuerda incluir un título para tu charla</div>
    <div class="d-grid gap-2">
        <button id="boton-formulario" type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </div>
    </div>
</form>

<div class="container" >
<?php
require "include/php/conexion/registrar.php";
?>
</div>

<script>

var capturaBotonEnviar = document.getElementById("boton-formulario")
capturaBotonEnviar.addEventListener('click',enviar)

function enviar(){
    capturaBotonEnviar.preventDefault();
}

</script>