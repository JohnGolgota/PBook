</head>

<body>
    <!-- Nav  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="LibrosController.php?<?php echo "c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr'] ?>" id="logoP"><img src="../Public/Img/logo-uno.png" alt=""
                    width="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-uno"
                aria-controls="navbar-uno" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-uno">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="LibrosController.php?<?php echo "c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr'] ?>">Colección</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="autores" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Autores
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="autores">
                            <li><a class="dropdown-item" href="AutorController.php?action=listar&<?php echo "c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr'] ?>">Lista de autores</a>
                            </li>
                            <li><a class="dropdown-item" href="AutorController.php?action=agregar&<?php echo "c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr'] ?>">Agregar autor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="LibrosController.php?<?php echo "c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr'] ?>" id="libros-nav" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Libros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="libros-nav">
                            <li><a class="dropdown-item" href="LibrosController.php?&<?php echo "c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr'] ?>">Colección</a></li>
                            <li><a class="dropdown-item" href="LibrosController.php?action=agregar&<?php echo "c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr'] ?>">Agregar Libro</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="LibrosController.php?<?php echo "c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr'] ?>" id="Generos" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Generos o Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="Generos">
                            <li><a class="dropdown-item" href="GenController.php?action=lista&<?php echo "c=".$_SESSION['correo_usr']."&u=".$_SESSION['nombre_usr'] ?>">Lista</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#nuevoGen"
                                    href="">Nuevo</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <?php echo $_SESSION['nombre_usr']; ?>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                                </div>
                                <form action="UsuarioController.php" method="post">
                                    <input type="hidden" name="action" value="actualizar">
                                    <div class="modal-body">
                                        <label for="nombre_usr">Nombre de usuario:</label>
                                        <input class="form-control" type="text" name="nombre_usr" id="nombre_usr" value="<?php echo $_SESSION['nombre_usr']; ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Actualizar Perfil</button>
                                        <a href="../" class="btn btn-secondary">Cerrar Sesion</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>