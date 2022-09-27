<?php include '../Inc/header.html'; ?>

<title>Colleccion <?php echo "Holi" ?></title>
<?php 
// var_dump($objetoLibros); echo "<br>";
// var_dump($objetoAutores); echo "<br>";
// var_dump($objetoGeneros); echo "<br>";
var_dump($SuperConsultaInner);

?>
<?php include '../Inc/nav.php'; ?>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php foreach ($SuperConsultaInner as $libro) { ?>
        <div class="col">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <img src="<?php echo $libro->arte_li; ?>" class="card-img-top" alt="Portadas">
                <div class="card-header">
                    <h5 class="card-title"><?php echo $libro->titulo_li; ?></h5>
                    <?php echo $libro->nombre_au; ?>
                    <!-- determinar el estado va a ser una funcion -->
                    <form action="" method="POST" class="input-group">
                        <label for="estado_li" class="input-group-text card-title">Estado: </label>
                        <select name="estado_li" id="estado_li" class="form-select input-sm card-title text-<?php echo $libro->estado_li; ?>">
                            <option value="secondary" <?php if($libro->estado_li == "secondary"){echo "selected";} ?>>Pendiente</option>
                            <option value="success" <?php if($libro->estado_li == "success"){echo "selected";} ?>>Leido</option>
                            <option value="warning" <?php if($libro->estado_li == "warning"){echo "selected";} ?>>Leyendo</option>
                        </select>
                        <input type="hidden" name="action" value="update">
                        <button type="submit" class="card-title btn btn-secondary btn-sm"><i class="fa-solid fa-rotate-right"></i></button>
                    </form>
                </div>
                <div class="card-body">
                    <div>
                        <h6 class="card-title">Generos</h6>
                        <a href="" class="btn btn-outline-<?php echo $libro->estado_li; ?> btn-sm"><?php echo $libro->nombre_ge; ?></a>
                        <a data-bs-toggle="modal" data-bs-target="#nuevoGen" href="" class="btn btn-outline-<?php echo $libro->estado_li; ?> btn-sm"><i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <a href="" class="btn btn-outline-warning col">Editar</a>
                        <a href="" class="btn btn-outline-danger col">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col">
            <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <a href="LibrosController.php?action=agregar"><button class="btn btn-outline-primary btn-lg">Agregar Libro</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../Inc/footer.html'; ?>