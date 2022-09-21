<?php include '../Inc/header.html'; ?>
<link rel="stylesheet" href="../Public/Css/flstyle.css">
<title>Nuevo Libro</title>

<?php include '../Inc/nav.html'; ?>
<?php //var_dump($objetoAutores); 
?>
<?php //var_dump($objetoGeneros); 
?>
<div class="container-sm">
    <div class="container-sm">
        <h2>Nuevo Libro</h2>
        <form action="./LibrosController.php" method="POST" class="">
            <input type="hidden" name="action" value="prueba">
            <!-- Titulos -->
            <div class="input-group mb-2">
                <input placeholder="Titulo" type="text" name="titulo_li" id="titulo_li" class="form-control">
                <input placeholder="Titulo Original" type="text" name="tituloor_li" id="tituloor_li" class="form-control">
                <input type="number" name="npag_li" id="npag_li" class="form-control" placeholder="N° Pag.">
            </div>
            <!-- Series -->
            <input placeholder="Nombre de la Saga" type="text" name="serie_li" id="serie_li" class="form-control mb-2">
            <div class="input-group mb-2">
                <span class="input-group-text">Numero en la Saga</span>
                <input placeholder="Numero en la Saga" type="number" name="orderse_li" id="orderse_li" class="form-control" min="0" value="0">
            </div>
            <!-- Lista de autores -->
            <input class="form-control mb-2" list="ListaAu" name="listaautores_li" id="listaautores_li" placeholder="Autor...">
            <datalist id="ListaAu">
                <!-- inicio bucle -->
                <?php foreach ($objetoAutores as $autor) { ?>
                    <option value="<?php echo $autor->id_au; ?>"><?php echo $autor->nombre_au; ?></option>
                <?php } ?>
                <!-- fin bucle -->
            </datalist>
            <!-- Lista de autores -->
            <!-- Arte -->
            <div class="input-group mb-2">
                <input type="text" name="arte_li" id="arte_li" class="form-control" placeholder="Link de portada: https://upload.wikimedia.org/wikipedia/commons/b/bd/Amazing_Stories%2C_April_1926._Volume_1%2C_Number_1.jpg">
                <input type="text" name="artista_li" id="artista_li" class="form-control" placeholder="Nombre del artista">
            </div>
            <!-- Publicacion -->
            <div class="input-group mb-2">
                <label for="fpublic_li" class="input-group-text">Fecha de Primera publicacion</label>
                <input type="date" name="fpublic_li" id="fpublic_li" class="form-control" placeholder="Fecha de Primera publicacion">
            </div>
            <!-- generos -->
            <h5>Selecciona el genero... (uno porque no se hacerlo con checkbox)</h5>
            <div class="input-group mb-2">
                <?php foreach ($objetoGeneros as $genero) { ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="<?php echo $genero->nombre_ge; ?>" name="id_ge" value="<?php echo $genero->id_ge; ?>">
                        <label class="form-check-label" for="<?php echo $genero->nombre_ge; ?>"><?php echo $genero->nombre_ge; ?></label>
                    </div>
                <?php } ?>
            </div>
            <!-- Estado y posesion -->
            <h2>Estado y Posesion Personal</h2>
            <div class="input-group mb-2">
                <label class="input-group-text" for="estado_li">Estado:</label>
                <select class="form-select" id="estado_li" name="estado_li">
                    <option value="secondary" selected>Elije uno...</option>
                    <option value="success">Leido</option>
                    <option value="warning">Leyendo</option>
                    <option value="secondary">Pendiente</option>
                </select>
            </div>
            <!-- Estado y posesion -->
            <div class="input-group mb-2">
                <label class="input-group-text" for="com_li">¿Comprado?:</label>
                <select class="form-select" id="com_li" name="com_li">
                    <option value="No" selected>Elije uno...</option>
                    <option value="Si digital">Si digital</option>
                    <option value="Si fisico">Si fisico</option>
                    <option value="No">No</option>
                </select>
                <input type="date" name="fcom_li" id="fcom_li" class="form-control" placeholder="Nombre del artista">
            </div>

            <button type="submit" class="btn btn-secondary">Enviar</button>
        </form>
    </div>
</div>

<?php include '../Inc/footer.html'; ?>