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
                    <h6 class="card-title text-<?php echo "secondary"; ?>">Estado: <?php echo "Pendiente"; ?></h6>
                </div>
                <div class="card-body text-secondary">
                    <p class="card-text">description</p>
                </div>
                <div class="card-body">
                    <div>
                        <h6 class="card-title">Generos</h6>
                        <a href="" class="btn btn-outline-<?php echo "secondary"; ?> btn-sm"><?php echo "aqui falta funcion"; ?></a>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <a href="" class="btn btn-outline-<?php echo "secondary"; ?>">Actulizar Estado</a>
                    </div>
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
        <img src="../Public/Img/4852810.svg" alt="" srcset="">
        <img src="../Public/Img/6987734.svg" alt="" srcset="">
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