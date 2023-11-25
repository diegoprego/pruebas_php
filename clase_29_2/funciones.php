<?php



function saludar(){

    echo "Hola soy una funcion sin parametros" . "<br>";

}

saludar();

function saludarParametros($nombre, $apellido,$edad,$humano=true){

    if($edad>=18 && $humano==true){
    echo "El usuario es " . $nombre . " y su apellido es " . $apellido;

}else{
    echo "No es mayor de edad";
}

}

//si omito el 4to parametro me toma el true x dfecto


saludarParametros("Diego", "Prego",18,false);

// funciones con retorno

function conRetorno(){

    return true;
}

echo "<br>";

echo conRetorno();

echo "<br>";

$resultadoReturn = conRetorno();

if ($resultadoReturn){
    echo "dio que es verdadero";
}

echo "<br>";

if(isset($resultadoReturn)){
    echo "existe una variable " . isset($resultadoReturn);
}

echo "<br>";

$leandro = "admin";

// funcion que busque una letra en el contenido de una variable (otro nivel de seguridad)

if(isset($leandro) && $leandro=="admin"){
    echo "existe la variable Leandro " . isset($leandro);
}else{
    echo "no existe Leandro como variable tal " . isset($leandro);
}

echo "<br>";

// valor de entrada (le pasamos: variable, array,objeto) -> "encapsulado" -> devolver/retornar




// P R O G R A M A C I O N   O R I E N T A D A   A   O B J E T O S

//variables....array.....arrayAsociativos....Objetos

//Clase -> tiene atributos

$persona1 = [
    "nombre"=>"marcos",
    "apellido"=>"gomez",
    "edad"=>48,
]
$persona2 = [
    "nombre"=>"marcos",
    "apellido"=>"gomez",
    "edad"=>48,
]

//los Objetos son "clones" de la clase Persona, se usa porque los atributos de la clase se repiten todo el tiempo. Los objetos ya contiernen los atributos de la clase, solo tengo que efiir los valores

// puedo trabajar las tablas de la base de datos como objetos

//con "public" puedo acceder desde cualqueir parte, desde una funcion etc

class Persona {

    //atributos
    public $nombre;
    public $apellido;
    public $edad;
    public $telefono;
    public $soyRobot

}

// instancio un objeto a partir de mi clase

//Jose es un objeto de la clase persona
$jose = new Persona();






class Oradores{

    $id_oradores;
    $nombre;
    $apellido;
    $correo;
    $tema;
    $fecha_alta

}






?>