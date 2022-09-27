<?php include '../Inc/header.html'; ?>

<title>Lista de Autores</title>

<?php include '../Inc/nav.php'; ?>

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <!-- Se repite lo de abajo -->
        <?php foreach ($objetoAutores as $autor) { ?>
            <div class="col">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <h5 class="card-title"><?php echo "$autor->nombre_au"; ?></h5>
                        Seudonimo: <?php echo "$autor->seudonimo_au"; ?>
                    </div>
                    <div class="card-body text-secondary">
                        <h6>Datos:</h6>
                        <p class="card-text">Ocupacion: <?php echo "$autor->ocupacion_au"; ?></p>
                        <p class="card-text">Lenguaje original: <?php echo "$autor->lenguao_au"; ?></p>
                        <p class="card-text">Nacimiento: <?php echo "El $autor->fnacio_au en $autor->nacio_au"; ?></p>
                    </div>
                    <!--<div class="card-body">
                        <div>
                            <h6 class="card-title">Obras</h6>
                            <a href="" class="btn btn-outline-<?php //echo "secondary";?> btn-sm"><?php //echo "aqui falta funcion";?></a>No se hacer lo que planeaba aquí y no tengo tiempo ●﹏● 
                            <a href="" class="btn btn-outline-<?php //echo "secondary";?> btn-sm"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>-->
                    <div class="card-footer">
                        <div class="row">
                            <a href="AutorController.php?action=edit<?php echo $autor->id_au; ?>" class="btn btn-outline-warning col">Editar</a>
                            <a href="AutorController.php?action=delete<?php echo $autor->id_au; ?>" class="btn btn-outline-danger col">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="col">
            <!--Hasta aqui-->
            <div class="card mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <a href="AutorController.php?action=agregar"><button class="btn btn-outline-primary btn-lg"><i class="fa-solid fa-plus"></i></button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../Inc/footer.html'; ?>