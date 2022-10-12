<?php
if (session_status() != FALSE) {
    // session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="./Public/Js/fontawesome.js" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Favicon -->
    <link rel="shortcut icon" href="./Public/Img/logo-uno.png" type="image/x-icon">

    <!-- Fonts -->

    <!-- Librerias Css -->
    <link rel="stylesheet" href="./Public/Css/bootstrap.min.css">

    <!-- scripts  -->
    <script src="./Public/Js/bootstrap.bundle.min.js"></script>

    <!-- Personalizados:Css -->
    <link rel="stylesheet" href="./Public/Css/style.css">

    <title>Colleccion</title>

</head>

<body>
    <!-- Nav  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="./Controllers/UsuarioController.php?action=registrar" id="logoP"><img src="./Public/Img/logo-uno.png" alt="" width="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-uno" aria-controls="navbar-uno" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-uno">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Controllers/UsuarioController.php?action=registrar">Registrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Controllers/UsuarioController.php?action=iniciar">Iniciar</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar Libro" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-4 g-4">
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
                                <option value="secondary" <?php if ("secondary" == "secondary") {echo "selected";} ?>>Pendiente</option>
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
                            <a data-bs-toggle="modal" data-bs-target="#nuevoGen" href="" class="btn btn-outline-<?php echo "secondary"; ?> btn-sm"><i class="fa-solid fa-plus"></i></a>
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
                        <a href="./Controllers/UsuarioController.php?action=registrar"><button class="btn btn-outline-primary btn-lg">Crear Cuenta</button></a>
                        <a href="./Controllers/UsuarioController.php?action=iniciar"><button class="btn btn-outline-primary btn-lg">Iniciar Sesion</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nuevoGen" tabindex="-1" aria-labelledby="Nuevo" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="GenController.php" method="POST">
                    <input type="hidden" name="action" value="guardar">
                    <div class="modal-header">
                        <h5 class="modal-title">Nueva categoria:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nombre_ge" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre_ge" id="nombre_ge" placeholder="SFW" maxlength="50">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion_ge" class="form-label">Descripción:</label>
                            <textarea class="form-control" name="descripcion_ge" id="descripcion_ge" cols="30" rows="6" maxlength="255"></textarea>
                        </div>
                        <div class="modal-footer input-group">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Librerias Js inportadas y Fontawesome -->
    <script src="https://kit.fontawesome.com/8a160a18f4.js" crossorigin="anonymous"></script>

    <script src="./Public/Js/sweetalert.min.js"></script>

    <script src="./Public/Js/app.js"></script>

    <script>
        // function borrarCargo(id) {
        //     swal({
        //             title: "¿Seguro?",
        //             text: "El registro sera irecuperable!",
        //             icon: "warning",
        //             buttons: true,
        //             dangerMode: true,
        //         })
        //         .then((willDelete) => {
        //             if (willDelete) {
        //                 swal("Poof! Se comvirtio en chocapick!", {
        //                     icon: "success",
        //                 });
        //                 location.href = "./eliminarcargo.php?id=" + id;
        //             } else {
        //                 swal("Salvado!");
        //             }
        //         });
        // }
    </script>
</body>

</html>