<?php
include_once '../Models/tbl_autor.php';
class AutorController extends tbl_autor{
    public function VistaAgregarAutor()
    {
        include_once '../Views/Autor/agregarAutor.php';
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'agregar') {
    $autorcontroller = new AutorController();
    $autorcontroller->VistaAgregarAutor();
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