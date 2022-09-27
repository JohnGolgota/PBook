<?php
class tbl_usuarios{
    protected $id_usr;
    protected $nombre_usr;
    protected $correo_usr;
    protected $contrasena_usr;

    public function ComprobarCorreo()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_usuarios WHERE correo_usr='$this->correo_usr'";
        $consulta = $conexion->stm->prepare($sql);
        $consulta->execute();
        $presuntoUsuario = $consulta->fetchAll(PDO::FETCH_OBJ);
        if ($presuntoUsuario) {
            foreach ($presuntoUsuario as $usuario) {}
            return $usuario;
        }
        return 0;
    }
    public function RegistrarUsuario()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_usuarios(nombre_usr,correo_usr,contrasena_usr) VALUES (?,?,?)";
        $insert = $conexion->stm->prepare($sql);

        $insert->bindParam(1,$this->nombre_usr);
        $insert->bindParam(2,$this->correo_usr);
        $insert->bindParam(3,$this->contrasena_usr);

        $insert->execute();
    }
    public function ConsultarUsuario()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_usuarios WHERE correo_usr = '$this->correo_usr'";
        $consulta = $conexion->stm->prepare($sql);
        $consulta->execute();

        $objetoUsuario = $consulta->fetchAll(PDO::FETCH_OBJ);
        if ($objetoUsuario) {
            return $objetoUsuario;
        }
        return 0;
    }
}
?>