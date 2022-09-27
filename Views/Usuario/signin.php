<?php include '../Inc/header.html'; ?>

<title>Crear Cuenta | Colleccion</title>

<?php include '../Inc/navns.html'; ?>
<div class="container">

    <form action="./UsuarioController.php" method="POST" novalidate>
        <!-- Input Action -->
        <input type="hidden" name="action" value="inicio">
        <!--  -->
        <div class="row">
            <div class="col-md- 6 mb-2">
                <label for="correo_usr" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="correo_usr" id="correo_usr" required>
            </div>
            <div class="col-md-6 mb-2">
                <label for="contrasena_usr" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contrasena_usr" id="contrasena_usr" required>
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-outline-dark">Iniciar</button>
        </div>
    </form>
    <hr>
    <label for="">No tienes Cuenta?</label>
    <a href="./UsuarioController.php?action=registrar" class="btn btn-outline-dark">Registrate!</a>
</div>
<?php include '../Inc/footerns.html'; ?>