<?php
require "include/php/pages/header.php"
?>


  
<!-- Inicio barra de navegacion -->

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
                <a class="nav-link active" aria-current="page" href="#">La Conferencia</a>
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
                <a class="nav-link" id="tickets" href="comprar_tickets.php">Comprar tickets</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
<!-- Fin barra de navegacion -->


<!-- Inicio Carrousel -->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="include/img/ba1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="include/img/ba2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="include/img/ba3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
<!--   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
  
  <!-- Carousel Caption -->
  
  <div class="carousel-caption d-none d-md-block">
    <div class="card-body">
      <div class="row">
        <div class="col-6"></div>
        <div class="col-6" id="caption-content" >
        <h3 class="card-title">Conf Bs As</h3>
        <p class="card-text">Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que estan creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
        <button type="button" class="btn btn-outline-light btn-sm">Quiero ser orador</button>
        <button id="boton-tickets" type="button" class="btn btn-outline-light btn-sm">Comprar Tickets</button>
        </div>
      </div>   
    </div>
  </div>
</div>

<!-- Fin Carousel -->



<!-- Inicio Cards -->
<div class="container">
  <div id="oradores" class="center-content">
    <p>CONOCE A LOS</p>
    <h3>ORADORES</h3>
  </div>

  <div class="row">
    <div class="col-4">
      <div class="card">
        <img src="include/img/steve.jpg" class="card-img-top" alt="Steve_Jobs">
        <div class="card-body">
          <a href="#" class="btn btn-light btn-custom" id="btn-javascript"><b>Javascript</b></a>
          <a href="#" class="btn btn-dark btn-custom" id="btn-react"><b>React</b></a>
          <h6 class="card-title">Steve Jobs</h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus preferendis delenti, totam fuga sequi iste! Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis veniam magni ratione!</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col-4">
    <div class="card">
      <img src="include/img/bill.jpg" class="card-img-top" alt="Bill_Gates">
      <div class="card-body">
        <a href="#" class="btn btn-light btn-custom" id="btn-javascript"><b>Javascript</b></a>
        <a href="#" class="btn btn-dark btn-custom" id="btn-react"><b>React</b></a>
        <h6 class="card-title">Bill Gates</h6>
        <h2></h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus preferendis delenti, totam fuga sequi iste! Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis veniam magni ratione!</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    </div>
    <div class="col-4">
    <div class="card">
      <img src="include/img/ada.jpeg" class="card-img-top" alt="Ada_Lovelace">
      <div class="card-body">
        <a href="#" class="btn btn-dark btn-custom" id="btn-negocios"><b>Negocios</b></a>
        <a href="#" class="btn btn-dark btn-custom" id="btn-startups"><b>Startups</b></a>
        <h6 class="card-title">Ada Lovelace</h6>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus preferendis delenti, totam fuga sequi iste! Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis veniam magni ratione!</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- Fin Cards -->


<!-- Inicio Lugar y Fecha -->

<div id="playa-container" class="container-fluid" >
  <div id="playa-card" class="card mb-3">
    <div class="row g-0">
      <div class="col-md-6">
        <img src="include/img/honolulu.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col-md-6">
        <div id="" class="card-body">
          <h4 class="card-title">Bs As - Octubre</h4>
          <p class="card-text">Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos. Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana de la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600km<sup>2</sup> de superficie)</p>
          <button type="button" class="btn btn-outline-light btn-sm">Conocé más</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Fin Tarjeta Playa -->


<!-- Inicio Formulario -->

<?php
require "include/php/conexion/conexion.php";
?>

<div class="container">
  <div id="formulario" class="center-content">
    <p> <small> CONVIÉRTETE EN UN</small></p>
    <h3>ORADOR</h3>
    <p>Anótate como orador para dar una <a href="#">charla ignite</a>. Cuéntanos de qué quieres hablar!</p>
  </div>
</div>

<div class="container">
  <div class="mb-3">
    <div class="row">
      <div class="col-md">
        <input type="text" class="form-control" placeholder="Nombre" aria-label="First name">
      </div>
      <div class="col-md">
        <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
      </div>
    </div>
  </div>
  <div class="mb-3">
      <input type="email" class="form-control" placeholder="Correo" aria-describedby="emailHelp" id="campoEmail">
    </div>

  <div class="">
    <textarea class="form-control" placeholder="Sobre qué quieres hablar?" id="floatingTextarea2" style="height: 200px"></textarea>
  </div>
  <div id="emailHelp" class="form-text">Recuerda incluir un título para tu charla</div>
  <div class="d-grid gap-2">
    <button id="boton-formulario" type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>

<!-- Fin Formulario -->


<!-- F O O T E R -->

<?php
require "include/php/pages/footer.php"
?>













