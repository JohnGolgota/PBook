<?php
class tbl_autor{
    protected $id_au;
    protected $nombre_au;
    protected $seudonimo_au;
    protected $nacio_au;
    protected $fnacio_au;
    protected $ocupacion_au;
    protected $lenguao_au;
    protected $nobras;

    public function RegistrarAutor(){
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_autor (nombre_au,seudonimo_au,nacio_au,fnacio_au,ocupacion_au,lenguao_au) VALUES (?,?,?,?,?,?)";
        $insert = $conexion->stm->prepare($sql);
        $insert->bindParam(1,$this->nombre_au);
        $insert->bindParam(2,$this->seudonimo_au);
        $insert->bindParam(3,$this->nacio_au);
        $insert->bindParam(4,$this->fnacio_au);
        $insert->bindParam(5,$this->ocupacion_au);
        $insert->bindParam(6,$this->lenguao_au);
        $insert->execute();
    }
    public function AllAuthors()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_autor ORDER BY id_au DESC";
        $prepare = $conexion->stm->prepare($sql);
        $prepare->execute();

        $objetoAutores = $prepare->fetchAll(PDO::FETCH_OBJ);
        return $objetoAutores;
    }
    public function ConsultarAutor()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_autor WHERE id_au = $this->id_au";
        $prepare = $conexion->stm->prepare($sql);
        $prepare->execute();

        $objetoAutor = $prepare->fetchAll(PDO::FETCH_OBJ);
        return $objetoAutor;
    }
    public function EditarAutor()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "UPDATE tbl_autor SET nombre_au = '$this->nombre_au', seudonimo_au = '$this->seudonimo_au', nacio_au = '$this->nacio_au', fnacio_au = '$this->fnacio_au', ocupacion_au = '$this->ocupacion_au', lenguao_au = '$this->lenguao_au' WHERE id_au = $this->id_au";
        $prepare = $conexion->stm->prepare($sql);
        $prepare->execute();
    }
    public function BorrarAutor()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "DELETE FROM tbl_autor WHERE id_au = $this->id_au";
        $prepare = $conexion->stm->prepare($sql);
        $prepare->execute();
    }
}
?>