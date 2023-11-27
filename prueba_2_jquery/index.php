<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="jquery_functions.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">

    <h1 style="margin-top: 50px">Hola</h1>

    <p style="margin-top: 50px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur pariatur suscipit numquam. Debitis mollitia quisquam alias. Ex sequi hic cupiditate vel aperiam blanditiis facere labore optio, beatae omnis rem voluptates?</p>


<!-- 1er check TIPO -->

<div id="tipo" style="margin-top: 50px">
    <p><strong>Tipología</strong></p>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineTipo" id="inlineTipo" value="A">
        <label class="form-check-label" for="inlineRadio1">Abrir</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineTipo" id="inlineTipo" value="B">
        <label class="form-check-label" for="inlineRadio2">Corrediza</label>
    </div>
</div>

<!-- 2do check MARCO-->

<form action="" name="radioTipo" style="margin-top: 50px" id="radioTipo">
    <div id="hoja">
        <p><strong>Marco</strong></p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineHoja" id="inlineHoja" value="1">
            <label class="form-check-label" for="inlineRadio1">HOJA1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineHoja" id="inlineHoja" value="2">
            <label class="form-check-label" for="inlineRadio2">HOJA2</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineHoja" id="inlineHoja" value="3">
            <label class="form-check-label" for="inlineRadio3">HOJA3</label>
        </div>
    </div>

</form>


<h1>SELECT</h1>

<div id="my_select" style="margin-top: 50px">
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
</div>





<form name="formulario" id="formulario" action="12-radio-button-jquery.php" method="POST" style="margin-top: 50px" >
<!-- 	<input type="radio" name="edad" id="edad1" value="20"> 20<br>
	<input type="radio" name="edad" id="edad2" value="30"> 30<br>
	<input type="radio" name="edad" id="edad3" value="40"> 40 
	<br><br> -->
	<input type="button" id="boton" value="Enviar">
</form>


</div>


    <script src="main.js"></script>
</body>
</html>