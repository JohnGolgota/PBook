<?php include '../Inc/header.html'; ?>

<title>Generos</title>

<?php include '../Inc/nav.html'; ?>
<div class="container">

    <h1>
        Lista de Generos: <button class="btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#nuevoGen">Nuevo <i class="fa-solid fa-plus"></i></button>
    </h1>
    <table class="table table-striped table-hover">
        <tr class="row">
            <th class="col-2">Nombre:</th>
            <th class="col">Descripción:</th>
            <th class="col-3">Acciones:</th>
        </tr>
        <!--Bucle Start-->
        <?php foreach ($objetoGeneros as $genero) {; ?>
            <tr class="row">
                <td class="col-2"><?php echo "$genero->nombre_ge"; ?></td>
                <td class="col"><?php echo $genero->descripcion_ge; ?></td>
                <td class="col-3">
                    <button class="btn btn-danger" onclick='borrarRegistro(<?php echo $genero->id_ge; ?>)'>Borrar</button>
                    <button class="btn btn-Secondary" data-bs-toggle="modal" data-bs-target="#editGen<?php echo $genero->id_ge; ?>">Editar</button>
                    <?php echo $genero->id_ge; ?>
                </td>
            </tr>
            <div class="modal fade" id="editGen<?php echo $genero->id_ge; ?>" tabindex="-1" aria-labelledby="Nuevo" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="GenController.php" method="POST">
                            <input type="hidden" name="action" value="editar" >
                            <div class="modal-header">
                                <h5 class="modal-title">Nueva categoria:</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nombre_ge" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" name="nombre_ge" id="nombre_ge" placeholder="SFW" value="<?php echo $genero->nombre_ge; ?>" maxlength="50">
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion_ge" class="form-label">Descripción:</label>
                                    <textarea class="form-control" name="descripcion_ge" id="descripcion_ge" cols="30" rows="6" maxlength="255" placeholder="<?php echo $genero->descripcion_ge; ?>"></textarea>
                                </div>
                                <div class="modal-footer input-group">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </table>
    <!--Bucle end-->

</div>
<?php include '../Inc/footer.html'; ?>