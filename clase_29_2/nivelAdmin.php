<?php

$superUsuario = "gerard";
$superPass = "123456";


require "pages/header.php";

if($superUsuario=="gerardo"){
    
    require "pages/main.php";

}else{

    require "error/404.php";

    echo "el virus se llama: " . $error404;
    // la variable es tomada de pages/404, por lo que tengo que importar antes la pagina
    probandoFuncionOtro();
}


require "pages/footer.php";


?>