<?php
class tbl_libros{
    protected $id_li;
    protected $titulo_li;
    protected $tituloor_li;
    protected $serie_li;
    protected $orderse_li;
    protected $arte_li;
    protected $artista_li;
    protected $fpublic_li;
    protected $npag_li;
    protected $estado_li;
    protected $com_li;
    protected $fcom_li;
    protected $id_au;
    
    protected $id_ge;
    protected $tbl_genero_libro;

    public function AllLibros()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_libros";
        $prepare = $conexion->stm->prepare($sql);
        $prepare->execute();

        $objetoLibros = $prepare->fetchAll(PDO::FETCH_OBJ);
        return $objetoLibros;
    }
    public function AgregarLibro()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        // $sql = "INSERT INTO tbl_libros(titulo_li,tituloor_li,serie_li,orderse_li,arte_li,artista_li,fpublic_li,npag_li,estado_li,com_li,fcom_li,id_au) VALUES ('$this->titulo_li','$this->tituloor_li','$this->serie_li','$this->orderse_li','$this->arte_li','$this->artista_li','$this->fpublic_li','$this->npag_li','$this->estado_li','$this->com_li','$this->fcom_li','$this->id_au'); INSERT INTO tbl_genero_libro(id_ge,id_li) VALUES ('$this->id_ge','$this->id_li')";
        $sqls = ["INSERT INTO tbl_libros(titulo_li,tituloor_li,serie_li,orderse_li,arte_li,artista_li,fpublic_li,npag_li,estado_li,com_li,fcom_li,id_au) VALUES ('$this->titulo_li','$this->tituloor_li','$this->serie_li','$this->orderse_li','$this->arte_li','$this->artista_li','$this->fpublic_li','$this->npag_li','$this->estado_li','$this->com_li','$this->fcom_li','$this->id_au')"];
        foreach ($sqls as $sql) {
            $prepare = $conexion->stm->prepare($sql);
            $prepare->execute();
        }
        $this->InsertarIntermedia();
    }
    public function InsertarIntermedia()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_libros WHERE titulo_li = '$this->titulo_li' AND tituloor_li = '$this->tituloor_li'";
        $prepare = $conexion->stm->prepare($sql);
        $prepare->execute();
        $objetoLibro = $prepare->fetchAll(PDO::FETCH_OBJ);
        foreach ($objetoLibro as $libro) {}
        $this->id_li = $libro->id_li;
        $lqs = "INSERT INTO tbl_genero_libro(id_ge,id_li) VALUES ('$this->id_ge','$this->id_li')";
        $prepare = $conexion->stm->prepare($lqs);
        $prepare->execute();
    }
    public function SuperConsultaInner()
    {
        include_once '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_libros INNER JOIN tbl_autor ON tbl_autor.id_au = tbl_libros.id_au INNER JOIN tbl_genero_libro ON tbl_genero_libro.id_li = tbl_libros.id_li INNER JOIN tbl_genero ON tbl_genero.id_ge = tbl_genero_libro.id_ge";
        $prepare = $conexion->stm->prepare($sql);
        $prepare->execute();

        $objetoLibrosInner = $prepare->fetchAll(PDO::FETCH_OBJ);
        return $objetoLibrosInner;
    }
}
?>