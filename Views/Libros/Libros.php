<?php include '../Inc/header.html'; ?>

<title>Colleccion <?php echo "Holi" ?></title>

<?php include '../Inc/nav.html'; ?>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <img src="https://img1.od-cdn.com/ImageType-400/5835-1/4AD/559/9D/%7B4AD5599D-BDF1-4B0C-8D09-798410DF4EFA%7DImg400.jpg" class="card-img-top" alt="Portadas">
                <div class="card-header">
                    <h5 class="card-title">El problema de los tres cuerpos</h5>
                    Liu Cixin
                    <!-- determinar el estado va a ser una funcion -->
                    <form action="" method="POST" class="input-group">
                        <label for="estado_li" class="input-group-text card-title">Estado: </label>
                        <select name="estado_li" id="estado_li" class="form-select input-sm card-title text-<?php echo "secondary"; ?>">
                            <option value="secondary" <?php if("secondary" == "secondary"){echo "selected";} ?>>Pendiente</option>
                            <option value="success" <?php //if("success" == "success"){echo "selected";} ?>>Leido</option>
                            <option value="warning" <?php //if("warning" == "warning"){echo "selected";} ?>>Leyendo</option>
                        </select>
                        <input type="hidden" name="action" value="update">
                        <button type="submit" class="card-title btn btn-secondary btn-sm"><i class="fa-solid fa-rotate-right"></i></button>
                    </form>
                </div>
                <div class="card-body text-secondary">
                    <p class="card-text">description</p>
                </div>
                <div class="card-body">
                    <div>
                        <h6 class="card-title">Generos</h6>
                        <a href="" class="btn btn-outline-<?php echo "secondary"; ?> btn-sm"><?php echo "aqui falta funcion"; ?></a>
                        <a href="" class="btn btn-outline-<?php echo "secondary"; ?> btn-sm"><i class="fa-solid fa-plus"></i></a>
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
        <div class="col">
            <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <a href="UsuarioController.php?action=registrar"><button class="btn btn-outline-primary btn-lg">Agregar Libro</button></a>
                </div>
            </div>
        </div>
        <!-- Estado Leyendo -->
        <!-- <div class="col">
            <div class="card border-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div> -->
        <!-- Estado Leido -->
        <!-- <div class="col">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div> -->
    </div>
</div>

<?php include '../Inc/footer.html'; ?>