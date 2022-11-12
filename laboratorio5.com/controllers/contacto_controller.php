<?php
#metodos que van a invocar a las vistas
require_once("models/contacto.php");
class contacto_controller{ 
    public static function crear(){ #Para mostrar formulario
        $titulo = "Creacion de comentario de contacto";
        require_once ("views/template/header.php");
        require_once ("views/template/navbar.php");
        require_once("views/contacto/crear.php");
        require_once ("views/template/footer.php");

    }

    public static function mostrar(){ #Para mostrar datos del formulario
       
        if($_POST){
            if (!isset($_POST["token"]) || !seguridad::validaSesion($_POST["token"])){
                echo "Acceso restringido";
                exit();
            }

            empty($_POST["txtnombre_contacto"])?$error[0]="El nombre de contacto es necesario":$nombre = $_POST["txtnombre_contacto"];
            empty($_POST["txtcorreo_contacto"])?$error[1]="El correo de contacto es necesario":$correo = $_POST["txtcorreo_contacto"];
            
            
            $comentario = $_POST["txtcomentario_contacto"];

            if (isset($error)){
                $titulo = "Creacion de comentario de contacto";
                require_once ("views/template/header.php");
                require_once ("views/template/navbar.php");
                require_once("views/contacto/crear.php");
                require_once ("views/template/footer.php");
            }else{
                $nombre = filter_var($nombre,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $correo = filter_var($correo,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $comentario = filter_var($comentario,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $contacto = new contacto($nombre, $correo, $comentario);
                $resultados = $contacto->getDatos();
                $titulo = "Mostrar datos del contacto";
                require_once ("views/template/header.php");
                require_once ("views/template/navbar.php");
                require_once("views/contacto/mostrar.php");
                require_once ("views/template/footer.php");
            }
           
        }
    }
}
?>