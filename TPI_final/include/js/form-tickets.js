var capturaBotonResumen = document.getElementById("boton-resumen")
capturaBotonResumen.addEventListener('click',totalPagar)

function totalPagar(){

    const capturaCantidad = document.getElementById("campoCantidad")
    const capturaCategoria = document.getElementById("campoCategoriaEstudiante")
    const valorTicket = 200
    const capturaTotal = document.getElementById("total")

    console.log("Funciona el boton Resumen")
    console.log(capturaCantidad.value)
    console.log(capturaCategoria.value)
    console.log(valorTicket)
    console.log(capturaTotal.textContent)

    //capturaTotal.textContent = capturaTotal.textContent + (Number(capturaCantidad.value) * Number(capturaCategoria.value) * valorTicket)
    capturaTotal.textContent =  "Total a Pagar: $" + (Number(capturaCantidad.value) * Number(capturaCategoria.value) * valorTicket)

}


var capturaBotonBorrar = document.getElementById("boton-borrar")
capturaBotonBorrar.addEventListener('click',limpiarFormulario)

function limpiarFormulario(){

    console.log("Funciona el boton de Borrar")

    document.getElementById("campoNombre").value = "";
    document.getElementById("campoApellido").value = "";
    document.getElementById("campoEmail").value = "";
    document.getElementById("campoCantidad").value = "";
    document.getElementById("campoCategoriaEstudiante").value = 1;
}