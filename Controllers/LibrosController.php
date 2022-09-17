<?php
include_once '../Models/tbl_libros.php';
class LibrosController extends tbl_libros{
    public function VistaLibros()
    {
        include_once '../Views/Libros/Libros.php';
    }
    public function VistaAgregarLibro()
    {
        include_once '../Views/Libros/Agregar.php';
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'agregar') {
    $libroscontroller = new LibrosController();
    $libroscontroller->VistaAgregarLibro();
    return;
}
if (session_start()) {
    $libroscontroller = new LibrosController();
    $libroscontroller->VistaLibros();
    return;
}
?>