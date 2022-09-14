<?php
include_once '../Models/tbl_libros.php';
class LibrosController extends tbl_libors{
    public function VistaLibros()
    {
        include_once '../Views/Libros/Libros.php';
    }
    
}
if (session_start()) {
    $libroscontroller = new LibrosController();
    $libroscontroller->VistaLibros();
    return;
}
?>