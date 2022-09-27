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
    public function SolicitaInicioSesion($correo_usr,$contrasena_usr)
    {
        $usuario = $this->ComprobarUsuario($correo_usr);
        foreach ($usuario as $data) {}
        if (!password_verify($contrasena_usr,$data->contrasena_usr)) {
            die("Las contraseñas no coinciden");
        }
        session_start();
        $_SESSION['correo_usr'] = $data->correo_usr;
        $_SESSION['nombre_usr'] = $data->nombre_usr;
        return $_SESSION;
    }
    public function ComprobarUsuario($correo_usr)
    {
        $this->correo_usr = $correo_usr;
        $usuario = $this->ConsultarUsuario();
        if ($usuario == 0) {
            die("El usuario no existe en la base de datos");
        }
        return $usuario;
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
if (isset($_POST['action']) && $_POST['action'] == 'inicio' !empty($_POST['correo_usr'] && $_POST['contrasena_usr'])) {
    echo 'intento de acceso';
    $usuariocotroller = new UsuarioController();
    $usuariocotroller->SolicitaInicioSesion($_POST['correo_usr'],$_POST['contrasena_usr']);
}
if (isset($_POST['action']) && $_POST['action'] == 'inicio' empty($_POST['correo_usr'] || $_POST['contrasena_usr'])) {
    echo 'intento de acceso';
    $usuariocotroller = new UsuarioController();
    $usuariocotroller->SolicitaInicioSesion($_POST['correo_usr'],$_POST['contrasena_usr']);
}
if (isset($_GET) || !isset($_GET)) {
    $usuariocotroller = new UsuarioController();
    $usuariocotroller->RedirigirCol();
    return;
}
?>
inicio
registro