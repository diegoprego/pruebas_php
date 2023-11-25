<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<!-- <script>
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
</script> -->




</head>
<body>

<div class="container-fluid">

<form action="">

<!--     <div style="padding-top:20px">
        
        <h6>Tipo de Puerta</h6>

        <input type="radio" class="btn-check" name="options" id="" autocomplete="off">
        <label class="btn btn-secondary" for="">Abrir</label>
        <input type="radio" class="btn-check" name="options" id="" autocomplete="off">
        <label class="btn btn-secondary" for="">Corrediza</label>

    </div>

    <div style="padding-top:20px">
        <h6>Tipo de Puerta</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="" value="1">
            <label class="form-check-label" for="">Abrir</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="" value="2">
            <label class="form-check-label" for="">Corrediza</label>
        </div>
    </div>
 -->
    <!-- TIPO DE PUERTA ---------------------->

    <div style="padding-top:20px">
        <h6>Tipo</h6>
        <div class="form-check form-check-inline" id="tipoPuerta">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="puertaAbrir" value="1">
            <label class="form-check-label" for="puertaAbrir">Abrir</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTipo" id="puertaCorrediza" value="2">
            <label class="form-check-label" for="puertaCorrediza">Corrediza</label>
        </div>
    </div>

    <!-- MARCOS ---------------------->

    <div style="padding-top:20px">
        <h6>Marco</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMarco" id="marcoExtra" value="1">
            <label class="form-check-label" for="marcoExtra">Chapa Extra</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMarco" id="marcoInter" value="2">
            <label class="form-check-label" for="marcoInter">Chapa Inter</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMarco" id="marcoEco" value="33">
            <label class="form-check-label" for="marcoEco">Chapa Eco</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMarco" id="marcoPino" value="8">
            <label class="form-check-label" for="marcoPino">Madera Pino Finger-Joited</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMarco" id="marcoCedro" value="5">
            <label class="form-check-label" for="marcoCedro">Madera Cedro</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMarco" id="marcoAluminio" value="9">
            <label class="form-check-label" for="marcoAluminio">Aluminio</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMarco" id="marcoExtraSeco" value="6">
            <label class="form-check-label" for="marcoExtraSeco">Chapa Extra Seco</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="marcoInterSeco" id="marcoInterSeco" value="62">
            <label class="form-check-label" for="marcoInterSeco">Chapa Inter Seco</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="marcoPinoSeco" id="marcoPinoSeco" value="68">
            <label class="form-check-label" for="marcoPinoSeco">Madera Pino Finger-Joited Seco</label>
        </div>
    </div>

    <!-- HOJAS ---------------------->

    <div style="padding-top:20px">
        <h6>Hoja</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioHoja" id="tradicional" value="option1">
            <label class="form-check-label" for="tradicional">Tradicional</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioHoja" id="hardPlack" value="option2">
            <label class="form-check-label" for="hardPlack">Hard-Plack</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioHoja" id="pantografiada" value="option3">
            <label class="form-check-label" for="pantografiada">Pantografiada</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioHoja" id="masonite" value="option3">
            <label class="form-check-label" for="masonite">Masonite</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioHoja" id="cortafuegos" value="option3">
            <label class="form-check-label" for="cortafuegos">Cortafuegos</label>
        </div>
    </div>

    <div style="padding-top:20px">
        <h6>Terminación / Modelo</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTerminacion" id="cedropremium" value="3PR">
            <label class="form-check-label" for="cedropremium">Cedro Premium</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTerminacion" id="wengue" value="option2">
            <label class="form-check-label" for="wengue">Wengue</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTerminacion" id="roble" value="">
            <label class="form-check-label" for="roble">Roble</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTerminacion" id="cedroNacional" value="3">
            <label class="form-check-label" for="cedroNacional">Cedro Nacional</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTerminacion" id="guatambuEnchapado" value="4">
            <label class="form-check-label" for="guatambuEnchapado">Guatambu Enchapado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTerminacion" id="guatambuTerciado" value="9">
            <label class="form-check-label" for="guatambuTerciado">Guatambu Terciado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTerminacion" id="pinoTerciado" value="">
            <label class="form-check-label" for="pinoTerciado">Pino Terciado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioTerminacion" id="mdf" value="5">
            <label class="form-check-label" for="mdf">MDF</label>
        </div>
    </div>
    <div style="padding-top:20px">
        <h6>Medida</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida60" value="option1">
            <label class="form-check-label" for="medida60">60</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida70" value="option2">
            <label class="form-check-label" for="medida70">70</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida80" value="option2">
            <label class="form-check-label" for="medida80">80</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida90" value="option2">
            <label class="form-check-label" for="medida90">90</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida120" value="option1">
            <label class="form-check-label" for="medida120">120</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida140" value="option2">
            <label class="form-check-label" for="medida140">140</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida160" value="option2">
            <label class="form-check-label" for="medida160">160</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida180" value="option2">
            <label class="form-check-label" for="medida180">180</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida80-40" value="option2">
            <label class="form-check-label" for="medida80-40">80+40</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida90-30" value="option2">
            <label class="form-check-label" for="medida90-30">90+30</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioMedida" id="medida60-20" value="option2">
            <label class="form-check-label" for="medida60-20">60+20</label>
        </div>
        <div style="margin-top:30px">
            <button type="submit" id="boton-resumen" class="btn btn-primary">Enviar</button>
            <button type="reset" id="boton-borrar" class="btn btn-primary">Reestablecer</button>

        </div>
    </div>
</div>


<div class="container">

    <div class="card" style="margin-top:50px">
    <div class="card-body" id="codigoTango">
        
    </div>
    </div>

</div>


</form>



<script type="text/javascript">

    var capturaBotonResumen = document.getElementById("boton-resumen")
    capturaBotonResumen.addEventListener('click',generaCodigo)

function generaCodigo(){
    event.preventDefault()
    console.log("Funciona el boton Resumen")

    var capturaLinea
    capturaLinea = document.getElementById("puertaAbrir")
    
/*     input[name="inlineRadioTipo"].checked.value */
    return capturaLinea
    
    console.log(capturaLinea)


}









</script>






<!-- 
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


 -->
<script type="text/javascript">
    //definir las variables correspondientes



</script>


<!--     <div class="form-check" style=padding-top:50px>
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

    </form> -->














</div>



</body>
</html>