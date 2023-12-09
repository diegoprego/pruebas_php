<?php
require "include/php/pages/header.php";
?>

 
<!-- N A V E G A C I O N -->

  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="include/img/codoacodo.png" alt="" width="80" class="d-inline-block align-text-center">
        Conf Bs As
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-text-center">
          <li id="n1" class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">La Conferencia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#oradores">Los oradores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#playa-container">El lugar y la fecha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#formulario">Conviértete en orador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="tickets" href="#">Comprar tickets</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- Fin barra de navegacion -->


<!-- C A R D S -->
<div class="container" id="estudiantes-categorias" >
    <div class="row">
        <div class="col-4">
            <div class="card border-2" id="card-estudiante">
                <div class="card-body-ticket" >
                    <h4 class="card-title">Estudiante</h4>
                    <p class="card-text">Tienen un descuento</p>
                    <h5 class=""><b>80%</b></h5>
                    <p class="card-text"><small class="text-muted">* presentar documentación</small></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-2" id="card-trainee">
                <div class="card-body-ticket" >
                    <h4 class="card-title">Trainee</h4>
                    <p class="card-text">Tienen un descuento</p>
                    <h5 class=""><b>50%</b></h5>
                    <p class="card-text"><small class="text-muted">* presentar documentación</small></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-2" id="card-junior">
                <div class="card-body-ticket" >
                    <h4 class="card-title">Junior</h4>
                    <p class="card-text">Tienen un descuento</p>
                    <h5 class=""><b>15%</b></h5>
                    <p class="card-text"><small class="text-muted">* presentar documentación</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Cards -->


<!-- F O R M U L A R I O -->
<div id="formulario">
  <div class="container" >
    <div  class="center-content">
      <p> <small> VENTA</small></p>
      <h3 id="precio">VALOR DE TICKET $200</h3>
    </div>
  </div>

  <!-- Nombre y Apellido -->
  <div class="container form-tickets">
    <div class="mb-3">
      <div class="row">
        <div class="col-md">
          <input type="text" class="form-control" placeholder="Nombre" aria-label="First name" id="campoNombre">
        </div>
        <div class="col-md">
          <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name" id="campoApellido">
        </div>
      </div>
    </div>

  <!-- Email -->
    <div class="mb-3">
      <input type="email" class="form-control" placeholder="Correo" aria-describedby="emailHelp" id="campoEmail">
    </div>

  <!-- Cantidad y Categoria -->
    <div class="mb-3">
      <div class="row">
        <div class="col-md">
          <p class="cantidad-categoria">Cantidad</p>
          <input id="campoCantidad" type="number" min="0" class="form-control" placeholder="Cantidad" >
        </div>
        <div class="col-md">
          <p class="cantidad-categoria">Categoría</p>
          <select class="form-select" id="campoCategoriaEstudiante">
            <option value="1" selected>Seleccione una opción</option>
            <option value="0.2">Estudiante</option>
            <option value="0.5">Trainee</option>
            <option value="0.85">Junior</option>
        </select> 
        </div>
      </div>
    </div>

  <!-- Total a Pagar -->
    <div class="mb-3" id="totalPagar">
      <div class="alert alert-primary" role="alert">
        <div id="total">Total a Pagar: $</div>
      </div>
    </div>

  <!-- Botones -->
    <div class="d-grid gap-2 ">
      <div class="row">
          <div class="col-md">
              <button id="boton-borrar" type="reset" class="btn btn-primary boton-formulario-ticket">Borrar</button>
          </div>
          <div class="col-md">
              <button id="boton-resumen" type="submit" class="btn btn-primary boton-formulario-ticket">Resumen</button>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Formulario -->


<!-- F O O T E R -->

<?php
require "include/php/pages/footer.php"
?>
