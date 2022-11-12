<?php
require_once("controllers/principal_controller.php");
require_once("controllers/contacto_controller.php"); 
require_once("controllers/usuario_controller.php");
require_once("utils/seguridad.php");

if (count($_GET)==0)
call_user_func("principal_controller::index()");
else{
    $controlador= seguridad::decodificar($_GET["c"]);
    $metodo = seguridad::decodificar($_GET["m"]);
    call_user_func($controlador."_controller::".$metodo);
}



?>
