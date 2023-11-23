<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<script>
    function funcion(){
        if(document.formulario.box.checked == true){
            document.formulario.nombre.disabled = false;
            document.formulario.campo2.disabled = false;
        }
        else{
            document.formulario.nombre.disabled = true;
            document.formulario.campo2.disabled = true;
        }
    }
</script>




</head>
<body>

<div class="container-fluid">


    <div style="padding-top:20px">
        
        <h6>Tipo de Puerta</h6>

        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
        <label class="btn btn-secondary" for="option1">Abrir</label>

        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
        <label class="btn btn-secondary" for="option2">Corrediza</label>

    </div>

    <div style="padding-top:20px">
        <h6>Tipo de Puerta</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Abrir</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Corrediza</label>
        </div>
    </div>

    <div style="padding-top:20px">
        <h6>Línea</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Abrir</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Corrediza</label>
        </div>
    </div>

    <div style="padding-top:20px">
        <h6>Marco</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipoMarco" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Chapa Extra</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipoMarco" id="inlineRadioTipoMarco" value="option2">
            <label class="form-check-label" for="inlineRadio2">Chapa Inter</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipoMarco" id="inlineRadioTipoMarco" value="option3">
            <label class="form-check-label" for="inlineRadio3">Chapa Eco</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipoMarco" id="inlineRadioTipoMarco" value="option3">
            <label class="form-check-label" for="inlineRadio3">Madera Pino Finger-Joited</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipoMarco" id="inlineRadioTipoMarco" value="option3">
            <label class="form-check-label" for="inlineRadio3">Madera Cedro</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipoMarco" id="inlineRadioTipoMarco" value="option3">
            <label class="form-check-label" for="inlineRadio3">Aluminio</label>
        </div>
    </div>

    <div style="padding-top:20px">
        <h6>Hoja</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="3" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Aluminio</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="3" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Chapa</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="3" id="inlineRadio3" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="3" id="inlineRadio3" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="3" id="inlineRadio3" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="3" id="inlineRadio3" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="3" id="inlineRadio3" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="3" id="inlineRadio3" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="3" id="inlineRadio3" value="option3" disabled>
            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
        </div>
    </div>

    <div style="padding-top:20px">
        <h6>Modelo</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Abrir</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Corrediza</label>
        </div>
    </div>







</div>




<div class="container">

    

    <div class="col-lg-12">
        <form action="" style=padding-top:50px>
            <select class="form-select" aria-label="Default select example" ></div>
            <option selected>Tipo de Puerta</option>
            <option value="1">Abrir</option>
            <option value="2">Corrediza</option>
            </select>
            <select class="form-select" aria-label="Default select example" >
            <option selected>Marco</option>
            <option value="1">Chapa Extra</option>
            <option value="1">Chapa Inter</option>
            <option value="1">Chapa Eco</option>
            <option value="2">Madera Pino Finger-Jointed</option>
            <option value="2">Madera Cedro</option>
            <option value="3">Aluminio</option>
            </select>
            <select class="form-select" aria-label="Default select example" >
            <option selected>Hoja</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            <select class="form-select" aria-label="Default select example" >
            <option selected>Medida</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            <select class="form-select" aria-label="Default select example" >
            <option selected>Tabique</option>
            <option value="1">7 cm</option>
            <option value="1">10 cm (mampostería)</option>
            <option value="1">10 cm (dual - mampostería y construccion en seco)</option>
            <option value="2">12 cm (mampostería)</option>
            <option value="3">15 cm (mampostería)</option>
            <option value="3">Construcción en seco</option>
            <option value="3">Steel Frame</option>
            </select>
            <select class="form-select" aria-label="Default select example" >
            <option selected>Mano</option>
            <option value="1">Derecha</option>
            <option value="2">Izquierda</option>
            </select>
            <input type="submit">
            <input type="reset">
        </form>

    </div>
</div>


<script type="text/javascript">
    //definir las variables correspondientes



</script>


    <div class="form-check" style=padding-top:50px>
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
        Default radio
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
        Default checked radio
    </label>
    </div>


    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
  <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
</div>







</div>








<div class="container-fluid">

    <h1>FORMULARIO</h1>

    <form action="">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apellido">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Texto</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="submit">
        <input type="reset">

    </form>














</div>



</body>
</html>