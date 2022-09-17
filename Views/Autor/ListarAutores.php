<?php include '../Inc/header.html'; ?>

<title>Lista de Autores</title>

<?php include '../Inc/nav.html'; ?>

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    <h5 class="card-title"><?php echo "nombre_au";?></h5>
                    <?php echo "seudonimo_au"; ?>
                </div>
                <div class="card-body text-secondary">
                    <h6>Datos:</h6>
                    <p class="card-text">Ocupacion: <?php echo "ocupacion_au"; ?></p>
                    <p class="card-text">Lenguaje original: <?php echo "lenguao_au"; ?></p>
                    <p class="card-text">Nacimiento: <?php echo "fnacio_au en nacio_au"; ?></p>
                </div>
                <div class="card-body">
                    <div>
                        <h6 class="card-title">Obras</h6>
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
                    <a href="UsuarioController.php?action=registrar"><button class="btn btn-outline-primary btn-lg"><i class="fa-solid fa-plus"></i></button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../Inc/footer.html'; ?>