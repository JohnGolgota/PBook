<?php
include_once '../Models/tbl_libros.php';
class LibrosController extends tbl_libros{
    public function VistaLibros()
    {
        include_once '../Views/Libros/Libros.php';
    }
    
}
if (isset($_GET['action'])) {
    echo 'helo';
}
if (session_start()) {
    $libroscontroller = new LibrosController();
    $libroscontroller->VistaLibros();
    return;
}
?>