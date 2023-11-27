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

/* $persona1 = [
    "nombre"=>"marcos",
    "apellido"=>"gomez",
    "edad"=>48,
]
$persona2 = [
    "nombre"=>"marcos",
    "apellido"=>"gomez",
    "edad"=>48,
] */

//los Objetos son "clones" de la clase Persona, se usa porque los atributos de la clase se repiten todo el tiempo. Los objetos ya contiernen los atributos de la clase, solo tengo que efiir los valores

// puedo trabajar las tablas de la base de datos como objetos

//con "public" puedo acceder desde cualqueir parte, desde una funcion etc

//La clase se crean los atributos pero no se les asigna valor
class Persona {

    //atributos
    public $nombre;
    public $apellido;
    public $edad=18;
    public $telefono;
    public $soyRobot;

    




    // funciones en las clases se llaman "mètodos"

    function presentacion(){

        echo "Hola soy: ".  "y mi edad es: " ;
    }

    function hablar(){
        echo "Estoy hablando bla bla bla";
    }

    function dormir($hora,$tarea){
        
        if($hora==1530 && $tarea==true){
            return true;
        }else{
            return false;
        }
    }

    function cantar(){
        echo "Estoy cantando rap rap rap";
    }


}

// instancio un objeto a partir de mi clase

//Jose es un objeto de la clase persona, cuando se crea se dice que "se instancia"
// en php no hace falta indicarle el tipo de dato

$jose = new Persona();

$jose->nombre = "Jose";
$jose->apellido = "velez";

echo $jose->nombre;
echo $jose->apellido;
echo $jose->edad;
$jose->hablar();
$jose->cantar();
echo $jose->dormir(1530,true); //como el return es booleano necesito imprimirlo para ver el resultado

echo "<h2>Otro Objeto</h2> <br>";

$gerardo = new Persona();

$gerardo->nombre = "Gerardo";
$gerardo->apellido = "Montalbo";
$gerardo->edad = 52;

echo $gerardo->nombre;
echo $gerardo->apellido;
echo $gerardo->edad;



/* 
class Oradores{

    $id_oradores;
    $nombre;
    $apellido;
    $correo;
    $tema;
    $fecha_alta;

} */

// TAREA FIN DE SEMANA

/* crear una clase SuperHEroes, o algun tema <particular></particular>
y generar 5 objetos

- atributos
- metodos/funciones

*/




?>