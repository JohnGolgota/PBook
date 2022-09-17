<?php
include_once '../Models/tbl_genero.php';
class GenController extends tbl_genero{
    public function VistaListaGen()
    {
        $objetoGeneros = $this->AllGeneros();
        include_once '../Views/Genero/GeneroList.php';
    }
    public function RedirectListGen()
    {
        header("Location: GenController.php");
    }
    public function AlistarInformacion($nombre_ge,$descripcion_ge)
    {
        $this->nombre_ge = $nombre_ge;
        if ($descripcion_ge == "") {
            $descripcion_ge = "No hay";
        }
        $this->descripcion_ge = $descripcion_ge;
        $this->RegistrarGen();
        $this->RedirectListGen();
    }
}
if (isset($_POST['action']) && $_POST['action'] == 'guardar' && !empty($_POST['nombre_ge'])) {
    $gencontroller = new GenController();
    $gencontroller->AlistarInformacion($_POST['nombre_ge'],$_POST['descripcion_ge']);
    return;
}
if (isset($_POST['action']) && $_POST['action'] == 'guardar' && empty($_POST['nombre_ge'])) {
    $gencontroller = new GenController();
    echo "<script>alert('Por favor introduzca un nombre')</script>";
}
// Siempre al fondo
if (isset($_GET)) {
    $gencontroller = new GenController();
    $gencontroller->VistaListaGen();
    return;
}
if (!isset($_GET)) {
    $gencontroller = new GenController();
    $gencontroller->VistaListaGen();
    return;
}
?>