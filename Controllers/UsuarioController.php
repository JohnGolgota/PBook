<?php
include_once '../Models/tbl_usuarios.php';
class UsuarioController extends tbl_usuarios{
    public function VistaLoginForm()
    {
        include_once '../Views/Usuario/login.php';
    }
    public function VistainicioForm()
    {
        include_once '../Views/Usuario/signin.php';
    }
    public function RedirigirCol()
    {
        header("location: ../");
    }
    public function RedirigirSesion()
    {
        header("location: ./LibrosController.php");
    }
    public function PrepararInformacionRegistro($nombre_usr,$correo_usr,$contrasena_usr,$contrasena_usrc)
    {
        $this->correo_usr = $correo_usr;
        $presuntoCorreo = $this->ComprobarCorreo();
        if ($presuntoCorreo != 0) {
            die("El correo esta en uso");
        }
        if ($contrasena_usr != $contrasena_usrc) {
            die("Las Contraseñas no coinciden");
        }
        $contrasena_usr_encript = password_hash($contrasena_usr,PASSWORD_ARGON2ID);
        $this->contrasena_usr = $contrasena_usr_encript;
        
        $this->nombre_usr = $nombre_usr;
        $this->RegistrarUsuario();
        $_SESSION['u']="esta";
        $this->RedirigirSesion();
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'registrar') {
    echo 'Registrar';
    $usuariocotroller = new UsuarioController();
    $usuariocotroller->VistaLoginForm();
    return;
}
if (isset($_POST['action']) && $_POST['action'] == 'registro') {
    if (empty($_POST['nombre_usr'] && $_POST['correo_usr'] && $_POST['contrasena_usr'] && $_POST['contrasena_usrc'])) {
        die("Por Favor Rellene los campos (＃ﾟДﾟ)");
    }
    $usuariocotroller = new UsuarioController();
    $usuariocotroller->PrepararInformacionRegistro($_POST['nombre_usr'],$_POST['correo_usr'],$_POST['contrasena_usr'],$_POST['contrasena_usrc']);
    return;
}
if (isset($_GET['action']) && $_GET['action'] == 'iniciar') {
    echo 'iniciar';
    $usuariocotroller = new UsuarioController();
    $usuariocotroller->VistainicioForm();
    return;
}
if (isset($_GET) || !isset($_GET)) {
    $usuariocotroller = new UsuarioController();
    $usuariocotroller->RedirigirCol();
    return;
}
?>
inicio
registro