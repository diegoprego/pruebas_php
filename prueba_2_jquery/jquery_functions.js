$(document).ready(function(){ //ready function

    //oculto los radio buttons
    $("#hoja").hide();

    //hago aparecer la segunda fila de radio buttons
    $("#tipo").click(function(){
      $("#hoja").show(500).css("color","red");
      var selectedTipo = $('input:radio[name=inlineTipo]:checked').val();
      console.log(selectedTipo)
    });

    //guardo el valor del 2do radio button en una variable

    $("#hoja").click(function () {	 
      var selectedInput = $('input:radio[name=inlineHoja]:checked').val();
      //alert($('input:radio[name=edad]:checked').val());
      //alert(selectedInput)
      console.log(selectedInput)
			});

    // BOTON RESUMEN
    
      $("#boton").click(function(){	 
        //var codigo = selectedTipo + selectedInput;
        
        var codigo = $('input:radio[name=inlineTipo]:checked').val()+$('input:radio[name=inlineHoja]:checked').val();
        console.log(codigo);
        });



    $("form-check").change(function(){

      var selectedInput = $(this).children("option:selected").val();
      if (selectedInput == "1") {
        alert("Elegiste la opcion 1");

      }else if (selectedInput == "2") {
        alert("Elegiste la opcion 2");

      }else if (selectedInput == "3") {
        alert("Elegiste la opcion 3");
      };
    });




    $("select.form-select").change(function(){
 

      var selectedOption = $(this).children("option:selected").val();
      if (selectedOption == "1") {
        alert("Elegiste la opcion 1");

      }else if (selectedOption == "2") {
        alert("Elegiste la opcion 2");

      }else if (selectedOption == "3") {
        alert("Elegiste la opcion 3");
      };


    });
  });