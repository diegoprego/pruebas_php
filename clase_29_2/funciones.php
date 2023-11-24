<?php



function saludar(){

    echo "Hola soy una funcion sin parametros" . "<br>";

}

saludar();

function saludarParametros($nombre, $apellido,$edad,$humano=true){

    if($edad>=18){
    echo "El usuario es " . $nombre . " y su apellido es " . $apellido;

}else{
    echo "No es mayor de edad";
}
}

saludarParametros("Diego", "Prego",18);

//si omito el 4to parametro me toma el true x dfecto









?>