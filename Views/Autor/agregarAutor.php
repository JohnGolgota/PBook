<?php include '../Inc/header.html'; ?>
<link rel="stylesheet" href="../Public/Css/flstyle.css">

<title>Formulario de ingreso Autor</title>

<?php include '../Inc/nav.html'; ?>

<div class="container-sm">
    <div class="login-box">
        <form action="AutorController.php?action=guardar" method="POST" class="text-light">
            <h2>Autor</h2>
            <input type="hidden" name="action" value="guardar">
            <div class="mb-2">
                <input class="form-control mb-2" type="text" name="nombre_au" id="nombre_au" placeholder="Nombre">
                <input class="form-control" type="text" name="seudonimo_au" id="seudonimo_au" placeholder="Otro nombre o Seudonimo">
            </div>
            <label class="form-group-text" for="fnacio_au">Fecha de Nacimiento</label>
            <div class="input-group">
                <input class="form-control mb-2" type="date" name="fnacio_au" id="fnacio_au">
                <input class="form-control mb-2" type="text" name="nacio_au" id="nacio_au" placeholder="Lugar de nacimiento">
            </div>
            <input class="form-control mb-2" type="text" name="ocupacion_au" id="ocupacion_au" placeholder="Ocupacion" value="Escritor">
            <input class="form-control mb-2" type="text" name="lenguao_au" id="lenguao_au" placeholder="Lenguaje original">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>
</div>

<?php include '../Inc/footer.html'; ?>