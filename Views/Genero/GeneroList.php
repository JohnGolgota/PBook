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
        </tr><!--Bucle Start-->
        <?php foreach($objetoGeneros as $genero){ ;?>
        <tr class="row">
            <td class="col-2"><?php echo "$genero->nombre_ge"; ?></td>
            <td class="col"><?php echo $genero->descripcion_ge; ?></td>
            <td class="col-3"><?php echo $genero->id_ge;; ?></td>
        </tr>
        <?php } ?>
    </table><!--Bucle end-->
    
</div>
<?php include '../Inc/footer.html'; ?>