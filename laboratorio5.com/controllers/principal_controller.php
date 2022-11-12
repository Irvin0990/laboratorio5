 
<?php # aqui se crea metodos estaticos para no crear objetos 
require_once("utils/seguridad.php");
class principal_controller {
    public static function index(){
        $titulo = "Pagina principal";
        require_once ("views/template/header.php");
        require_once ("views/template/navbar.php");
        require_once("views/principal/index.php");
        require_once ("views/template/footer.php");

    }
}
?>