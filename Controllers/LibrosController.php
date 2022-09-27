<?php
session_start();
include_once '../Models/tbl_libros.php';
class LibrosController extends tbl_libros{
    public function VistaLibros()
    {
        include_once '../Views/Libros/Libros.php';
    }
    public function RedirigirColeccion()
    {
        header("location: LibrosController.php?c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr']);
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
        $objetoLibros = $this->AllLibros();
        include_once '../Views/Libros/Agregar.php';
    }
    public function PrepararInformacion()
    {
        // if ($_POST['id_li'] != "") {
            // echo "que?";
            // }
        // if ($_POST['id_li'] == "") {
        //     $_POST['id_li'] = "";
        // }
        $this->id_li = $_POST['id_li'];

        if ($_POST['titulo_li'] == "") {
            $_POST['titulo_li'] = "El titulo";
        }
        $this->titulo_li = $_POST['titulo_li'];

        if ($_POST['tituloor_li'] == "") {
            $_POST['tituloor_li'] = "Sin titulo Original";
        }
        $this->tituloor_li = $_POST['tituloor_li'];

        if ($_POST['npag_li'] == "") {
            $_POST['npag_li'] = "0";
        }
        $this->npag_li = $_POST['npag_li'];

        if ($_POST['serie_li'] == "") {
            $_POST['serie_li'] = "Independiente";
        }
        $this->serie_li = $_POST['serie_li'];

        if ($_POST['orderse_li'] == "") {
            $_POST['orderse_li'] = "0";
        }
        $this->orderse_li = $_POST['orderse_li'];

        if ($_POST['arte_li'] == "") {
            $_POST['arte_li'] = "Arte";
        }
        $this->arte_li = $_POST['arte_li'];

        if ($_POST['artista_li'] == "") {
            $_POST['artista_li'] = "Desconocido";
        }
        $this->artista_li = $_POST['artista_li'];

        if ($_POST['fpublic_li'] == "") {
            $_POST['fpublic_li'] = date("Y-m-d");
        }
        $this->fpublic_li = $_POST['fpublic_li'];

        if ($_POST['estado_li'] == "") {
            $_POST['estado_li'] = "secondary";
        }
        $this->estado_li = $_POST['estado_li'];

        if ($_POST['com_li'] == "") {
            $_POST['com_li'] = "No";
        }
        $this->com_li = $_POST['com_li'];

        if ($_POST['fcom_li'] == "") {
            $_POST['fcom_li'] = "0000-00-00";
        }
        $this->fcom_li = $_POST['fcom_li'];

        if ($_POST['id_au'] == "") {
            $_POST['id_au'] = "";
        }
        $this->id_au = $_POST['id_au'];

        if ($_POST['id_ge'] == "") {
            $_POST['id_ge'] = "";
        }
        $this->id_ge =  $_POST['id_ge'];
    }
    public function PrepararInsert()
    {
        $this->AgregarLibro();
    }
}
if (isset($_GET['c'], $_GET['u'])) {
    $_SESSION['correo_usr'] = $_GET['c'];
    $_SESSION['nombre_usr'] = $_GET['u'];
}
if (isset($_GET['action']) && $_GET['action'] == 'agregar') {
    $libroscontroller = new LibrosController();
    $libroscontroller->VistaAgregarLibro();
    return;
}
if (isset($_POST['action']) && $_POST['action'] == 'insert' && !empty($_POST['titulo_li'])) {
    echo "insertar libro";
    var_dump($_POST);
    $libroscontroller = new LibrosController();
    $libroscontroller->PrepararInformacion();
    $libroscontroller->PrepararInsert();
    $libroscontroller->RedirigirColeccion();
    return;
}
if (isset($_POST['action']) && $_POST['action'] == 'insert' && empty($_POST['titulo_li'])) {
    echo "Pon el titulo... solo eso";
}
if (!isset($_GET) || isset($_GET)) {
    $libroscontroller = new LibrosController();
    $libroscontroller->VistaLibros();
    return;
}
?>