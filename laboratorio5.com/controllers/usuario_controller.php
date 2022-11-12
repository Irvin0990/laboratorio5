<?php
require_once("models/usuario.php");

class usuario_controller{
    public static function login(){
        $titulo = "Login de usuario";
        require_once ("views/template/header.php");
        require_once ("views/template/navbar.php");
        require_once("views/usuario/login.php");
        require_once ("views/template/footer.php");


    }

    public static function validar(){
        
        if($_POST){
            if (!isset($_POST["token"]) || !seguridad::validaSesion($_POST["token"])){
                echo "acceso restringido";
                exit();
            }

            $obj = new usuario($_POST["txtusuario"], $_POST["txtpassword"],"","");
            $resultado = $obj->valida_usuario();
            if(count($resultado)>0){
                $_SESSION["usuario"] = $resultado["usuario"];
                $_SESSION["nombre"] = $resultado["nombre"];
                header("location:index.php");

            }
           
           
        }

    }
}
?>