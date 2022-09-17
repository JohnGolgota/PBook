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
        include_once '../Config/conectdb.php';
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_autor (nombre_au,seudonimo_au,nacio_au,fnacio_au,ocupacion_au,lenguao_au) VALUES ('$this->nombre_au','$this->seudonimo_au','$this->nacio_au','$this->fnacio_au','$this->ocupacion_au','$this->lenguao_au')";
        $insert = $conexion->stm->prepare($sql);
        $insert->execute();
    }
    public function AllAuthors()
    {
        include_once '../Config/conectdb.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_autor ORDER BY id_au DESC";
        $prepare = $conexion->stm->prepare($sql);
        $prepare->execute();

        $objetoAutores = $prepare->fetchAll(PDO::FETCH_OBJ);
        return $objetoAutores;
    }
}
?>