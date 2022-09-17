<?php
class tbl_genero{
    protected $id_ge;
    protected $nombre_ge;
    protected $descripcion_ge;

    public function RegistrarGen()
    {
        include_once '../Config/conectdb.php';
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_genero (nombre_ge,descripcion_ge) VALUES (?,?)";
        $insert = $conexion->stm->prepare($sql);
        $insert->bindParam(1, $this->nombre_ge);
        $insert->bindParam(2, $this->descripcion_ge);
        $insert->execute();
    }
    public function AllGeneros()
    {
        include_once '../Config/conectdb.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_genero";
        $prepare = $conexion->stm->prepare($sql);
        $prepare->execute();

        $objetoGeneros = $prepare->fetchAll(PDO::FETCH_OBJ);
        return $objetoGeneros;
    }
}
?>