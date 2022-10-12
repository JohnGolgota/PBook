<?php include '../Inc/header.html'; ?>
<link rel="stylesheet" href="../Public/Css/flstyle.css">

<title>Formulario de ingreso Autor</title>

<?php include '../Inc/nav.php'; ?>
<?php foreach ($onjetoAutor as $autor) {} ?>
<div class="container-sm">
    <div class="container-sm">
        <form action="AutorController.php" method="POST" class="text-light">
            <h2>Autor</h2>
            <input type="hidden" name="action" value="editar">
            <input type="hidden" name="id_au" value="<?php echo $autor->id_au; ?>">
            <div class="mb-2">
                <input class="form-control mb-2" type="text" name="nombre_au" id="nombre_au" placeholder="Nombre" value="<?php echo $autor->nombre_au; ?>">
                <input class="form-control" type="text" name="seudonimo_au" id="seudonimo_au" placeholder="Otro nombre o Seudonimo" value="<?php echo $autor->seudonimo_au; ?>">
            </div>
            <label class="form-group-text" for="fnacio_au">Fecha de Nacimiento</label>
            <div class="input-group">
                <input class="form-control mb-2" type="date" name="fnacio_au" id="fnacio_au" value="<?php echo $autor->fnacio_au; ?>">
                <input class="form-control mb-2" type="text" name="nacio_au" id="nacio_au" placeholder="Lugar de nacimiento" value="<?php echo $autor->nacio_au; ?>">
            </div>
            <input class="form-control mb-2" type="text" name="ocupacion_au" id="ocupacion_au" placeholder="Ocupacion" value="<?php echo $autor->ocupacion_au; ?>">
            <input class="form-control mb-2" type="text" name="lenguao_au" id="lenguao_au" placeholder="Lenguaje original" value="<?php echo $autor->lenguao_au; ?>">
            <input class="btn btn-primary" type="submit" value="Guardar cambios">
        </form>
    </div>
</div>

<?php include '../Inc/footer.html'; ?>