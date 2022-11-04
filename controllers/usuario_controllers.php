<?php
    if (session_status()==1)session_start();
?>
<?php
require_once("models/usuario_models.php");
class usuario_controllers
{
    public static function login()
    {
        require_once("views/templates/header.php");
        require_once("views/login.php");
        require_once("views/templates/footer.php");
    }
    public static function validar(){
        if ($_POST) {
            $_SESSION["token"] = $_POST["token"] ;
            if (!isset($_POST["token"]) || !seg::validaSession($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }

            $obj = new usuario($_POST["Usuario"], $_POST["Contra"], "");
            $resultado = $obj->validar_usuario();
            var_dump($resultado);
            if (count($resultado) > 0) {
                $_SESSION["usuario"] = $resultado["usuario"];
                header("location: index.php?c=".seg::codificar("shop")."&m=". seg::codificar("shop1"));
            }
        }
    }
    public static function cerrar_sesion()
    {   
        if (session_status()==1)session_start();
        setcookie("compras", 0);
        session_destroy();
        header("location: index.php");
    }
}
