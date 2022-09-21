<?php
session_start();
echo $_SESSION['u'];
include_once '../Models/tbl_libros.php';
class LibrosController extends tbl_libros{
    public function VistaLibros()
    {
        include_once '../Views/Libros/Libros.php';
    }
    public function VistaAgregarLibro()
    {
        // Esto no esta bien
        include_once '../Models/tbl_autor.php';
        $autor = new tbl_autor();
        $objetoAutores = $autor->AllAuthors();
        include_once  '../Models/tbl_genero.php';
        $genero = new tbl_genero();
        $objetoGeneros = $genero->AllGeneros();
        include_once '../Views/Libros/Agregar.php';
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'agregar') {
    $libroscontroller = new LibrosController();
    $libroscontroller->VistaAgregarLibro();
    return;
}
if (isset($_POST['action']) && $_POST['action'] == 'prueba') {
    echo $_POST['listaautores_li'];
    // $libroscontroller = new LibrosController();
    // $libroscontroller->VistaAgregarLibro();
    return;
}
if (isset($_GET)) {
    $libroscontroller = new LibrosController();
    $libroscontroller->VistaLibros();
    return;
}
if (!isset($_GET)) {
    $libroscontroller = new LibrosController();
    $libroscontroller->VistaLibros();
    return;
}
?>