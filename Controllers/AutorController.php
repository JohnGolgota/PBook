<?php
session_start();
include_once '../Models/tbl_autor.php';
class AutorController extends tbl_autor{
    public function VistaAgregarAutor()
    {
        include_once '../Views/Autor/agregarAutor.php';
    }
    public function VistaListaAutor()
    {
        $objetoAutores = $this->AllAuthors();
        include_once '../Views/Autor/ListarAutores.php';
    }
    public function VistaEditarAutor()
    {
        $id_au = $_GET['id_au'];
        $onjetoAutor = $this->TraerAutor($id_au);
        include_once '../Views/Autor/editarAutor.php';
    }
    public function RedirigirListaAutores()
    {
        header("Location: AutorController.php?action=lista");
    }
    public function AlistarInformacion($nombre_au,$seudonimo_au,$fnacio_au,$nacio_au,$ocupacion_au,$lenguao_au)
    {
        $this->nombre_au = $nombre_au;
        if ($seudonimo_au == "") {
            $seudonimo_au = "No";
        }
        $this->seudonimo_au = $seudonimo_au;

        if ($fnacio_au == "") {
            $fnacio_au = date("Y-m-d");
        }
        $this->fnacio_au = $fnacio_au;

        if ($nacio_au == "") {
            $nacio_au = "Desconocido";
        }
        $this->nacio_au = $nacio_au;
        
        if ($ocupacion_au == "") {
            $ocupacion_au = "Escritor";
        }
        $this->ocupacion_au = $ocupacion_au;

        if ($lenguao_au == "") {
            $lenguao_au = "Sin determinar";
        }
        $this->lenguao_au = $lenguao_au;

        $this->RegistrarAutor();
        $this->RedirigirListaAutores();
    }
    public function TraerAutor($id_au)
    {
        $this->id_au = $id_au;
        $autor = $this->ConsultarAutor();
        return $autor;
    }
    public function AlistarInformacionEditar($id_au,$nombre_au,$seudonimo_au,$fnacio_au,$nacio_au,$ocupacion_au,$lenguao_au)
    {
        $this->id_au = $id_au;
        $this->nombre_au = $nombre_au;
        if ($seudonimo_au == "") {
            $seudonimo_au = "No";
        }
        $this->seudonimo_au = $seudonimo_au;

        if ($fnacio_au == "") {
            $fnacio_au = date("Y-m-d");
        }
        $this->fnacio_au = $fnacio_au;

        if ($nacio_au == "") {
            $nacio_au = "Desconocido";
        }
        $this->nacio_au = $nacio_au;
        
        if ($ocupacion_au == "") {
            $ocupacion_au = "Escritor";
        }
        $this->ocupacion_au = $ocupacion_au;

        if ($lenguao_au == "") {
            $lenguao_au = "Sin determinar";
        }
        $this->lenguao_au = $lenguao_au;

        $this->EditarAutor();
        $this->RedirigirListaAutores();
    }
}
if (isset($_GET['c'], $_GET['u'])) {
    $_SESSION['correo_usr'] = $_GET['c'];
    $_SESSION['nombre_usr'] = $_GET['u'];
}
if (isset($_GET['action']) && $_GET['action'] == 'edit') {
    $autorcontroller = new AutorController();
    $autorcontroller->VistaEditarAutor();
    return;
}
if (isset($_POST['action']) && $_POST['action'] == 'editar' && !empty($_POST['nombre_au'])) { 
    $autorcontroller = new AutorController();
    $autorcontroller->AlistarInformacionEditar($_POST['id_au'],$_POST['nombre_au'],$_POST['seudonimo_au'],$_POST['fnacio_au'],$_POST['nacio_au'],$_POST['ocupacion_au'],$_POST['lenguao_au']);
    $autorcontroller->RedirigirListaAutores();
    return;
}
if (isset($_GET['action']) && $_GET['action'] == 'agregar') {
    $autorcontroller = new AutorController();
    $autorcontroller->VistaAgregarAutor();
    return;
}
if (isset($_GET['action']) && $_GET['action'] == 'guardar' && !empty($_POST['nombre_au'])) { 
    $autorcontroller = new AutorController();
    $autorcontroller->AlistarInformacion($_POST['nombre_au'],$_POST['seudonimo_au'],$_POST['fnacio_au'],$_POST['nacio_au'],$_POST['ocupacion_au'],$_POST['lenguao_au']);
    $autorcontroller->RedirigirListaAutores();
    return;
}
if (isset($_GET['action']) && $_GET['action'] == 'guardar' && empty($_POST['nombre_au'])) { 
    $autorcontroller = new AutorController();
    echo "Se supone que introduscaz un nombre ¡¡¡UNO!!!";
    return;
}
if (isset($_GET['action']) && $_GET['action'] == 'lista') {
    $autorcontroller = new AutorController();
    $autorcontroller->VistaListaAutor();
    return;
}
if (!isset($_GET)) {
    echo "Lista autores";
    return;
    // $autorcontroller = new AutorController();
    // $autorcontroller->
}
if (isset($_GET)) {
    $autorcontroller = new AutorController();
    $autorcontroller->VistaListaAutor();
    return;
}