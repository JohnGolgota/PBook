<?php
include_once '../Models/tbl_autor.php';
class AutorController extends tbl_autor{
    public function VistaAgregarAutor()
    {
        include_once '../Views/Autor/agregarAutor.php';
    }
    public function AlistarInformacion($nombre_au,$seudonimo_au,$fnacio_au,$nacio_au,$ocupacion_au,$lenguao_au)
    {
        $this->nombre_au = $nombre_au;
        if ($seudonimo_au == "") {
            $seudonimo_au = "0";
        }
        $this->seudonimo_au = $seudonimo_au;
        if ($fnacio_au == "") {
            $fnacio_au = "0";
        }
        $this->fnacio_au = $fnacio_au;
        if ($nacio_au == "") {
            $nacio_au = date("Y-m-d");
        }
        $this->nacio_au = $nacio_au;
        if ($ocupacion_au == "") {
            $ocupacion_au = "0";
        }
        $this->ocupacion_au = $ocupacion_au;
        if ($lenguao_au == "") {
            $lenguao_au = "0";
        }
        $this->lenguao_au = $lenguao_au;
        return "$nombre_au,$seudonimo_au,$fnacio_au,$nacio_au,$ocupacion_au,$lenguao_au";
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'agregar') {
    $autorcontroller = new AutorController();
    $autorcontroller->VistaAgregarAutor();
    return;
}
if (isset($_GET['action']) && $_GET['action'] == 'guardar' && !empty($_POST['nombre_au'])) { 
    $autorcontroller = new AutorController();
    echo $autorcontroller->AlistarInformacion($_POST['nombre_au'],$_POST['seudonimo_au'],$_POST['fnacio_au'],$_POST['nacio_au'],$_POST['ocupacion_au'],$_POST['lenguao_au']);
    return;
}
if (isset($_GET['action']) && $_GET['action'] == 'guardar' && empty($_POST['nombre_au'])) { 
    $autorcontroller = new AutorController();
    echo "Se supone que introduscaz un nombre ¡¡¡UNO!!!";
    return;
}
if (!isset($_GET)) {
    echo "Lista autores";
    return;
    // $autorcontroller = new AutorController();
    // $autorcontroller->
}
if (isset($_GET)) {
    echo "Aqui va la lista de autores, si tuviera una!";
    return;
}