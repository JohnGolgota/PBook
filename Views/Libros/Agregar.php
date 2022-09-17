<?php
// class tbl_libros{
//     protected $id_li;
//     protected $titulo_li;
//     protected $tituloor_li;
//     protected $fpublic_li;
//     protected $orderse_li;
//     protected $npag_li;
//     protected $estado_li;
//     protected $com_li;
//     protected $fcom_li;
//     protected $id_ed;
// }
?>
<?php include '../Inc/header.html'; ?>
<link rel="stylesheet" href="../Public/Css/flstyle.css">
<title>Nuevo Libro</title>

<?php include '../Inc/nav.html'; ?>

<div class="container-sm">
    <div class="login-box">
        <h2>Nuevo Libro</h2>
        <form action="" method="POST" class="">
            <!-- Lista de autores -->
            <label for="exampleDataList" class="form-label">Datalist example</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
                <option value="San Francisco">
                <option value="New York">
                <option value="Seattle">
                <option value="Los Angeles">
                <option value="Chicago">
            </datalist>
            <!-- Lista de autores -->
        </form>
    </div>
</div>
<h2>My Phonebook</h2>

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
</script>

<?php include '../Inc/footer.html'; ?>