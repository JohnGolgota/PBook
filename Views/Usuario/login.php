<?php include '../Inc/headerns.html'; ?>

<title>Crear Cuenta | Colleccion</title>

<?php include '../Inc/navns.html'; ?>
<div class="container">

    <form action="./UsuarioController.php" method="POST" novalidate>
        <!-- Input Action -->
        <input type="hidden" name="action" value="registro">
        <!--  -->
        <div class="row">
            <div class="col-12 mb-2">
                <label for="nombre_usr" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre_usr" id="nombre_usr" required>
            </div>
            <div class="col-12 mb-2">
                <label for="correo_usr" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="correo_usr" id="correo_usr" required>
            </div>
            <div class="col-6 mb-2">
                <label for="contrasena_usr" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contrasena_usr" id="contrasena_usr" required>
            </div>
            <div class="col-6 mb-2">
                <label for="contrasena_usrc" class="form-label">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="contrasena_usrc" id="contrasena_usrc" required>
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-outline-dark">Registrar</button>
        </div>
    </form>
    <hr>
    <label for="inicio">Ya Tienes Cuenta?</label>
    <a href="./UsuarioController.php?action=iniciar" class="btn btn-outline-dark">Inicia Sesion</a>
</div>
<?php include '../Inc/footerns.html'; ?>