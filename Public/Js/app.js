function borrarRegistro(id) {
    swal({
            title: "¿Seguro?",
            text: "El registro sera irecuperable!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Se comvirtio en chocapick!", {
                    icon: "success",
                });
                location.href = "./GenController.php?action=borrar&id_ge=" + id;
            } else {
                swal("Salvado!");
            }
        });
}
function borrarCuenta(correo) {
    swal({
        title: "Borrar Cuenta",
        text: "No podras recuperar la información",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            swal("Adios.", {
                icon: "success",
            });
            location.href = "./UsuarioController.php?action=delete&correo_usr=" + correo;
        } else {
            swal("Salvado!");
        }
    });
}