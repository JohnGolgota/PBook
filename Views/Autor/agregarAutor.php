<?php include '../Inc/header.html'; ?>
<link rel="stylesheet" href="../Public/Css/flstyle.css">

<title>Formulario de ingreso Autor</title>

<?php include '../Inc/nav.html'; ?>

<div class="container-sm">
    <div class="login-box">
        <form action="AutorController.php" method="POST" class="text-light">
            <h2>Nuevo Libro</h2>
            <input type="hidden" name="action" value="agregar">
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
<!-- <h2>My Phonebook</h2>

<input type="text" id="select-input" onkeyup="buscarAutor()" placeholder="Nombre del autor" title="Autor">

<ul id="myUL">
    <li><a href="#">Adele</a></li>
    <li><a href="#">Agnes</a></li>

    <li><a href="#">Billy</a></li>
    <li><a href="#">Bob</a></li>

    <li><a href="#">Calvin</a></li>
    <li><a href="#">Christina</a></li>
    <li><a href="#">Cindy</a></li>
</ul>

<script>
    function buscarAutor() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("select-input");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script> -->

<?php include '../Inc/footer.html'; ?>