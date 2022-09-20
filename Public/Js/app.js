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