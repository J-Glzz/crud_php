$(document).ready(function () {
    reloadData();
});
//Esta función, recarga nuestra pagina de usuarios con el método post
//y se ejecuta siempre que iniciamos el documento, por eso la función
//se encuentra dento de $(document).ready(function (){});
function reloadData() {
    $.post("php/methods.php",
    {
        //El método $.post() se conecta con el documento que contiene todos los controles,
        //en este caso, llamamos a la función listReg, propia del documento methods.php,
        //este controla todo el proceso que realiza el llenado de los datos.
        controller: "listReg"
    },
    function (data) {
        //Y toda la informacion se carga en un identificador que proviene del documento users.php,
        //a través de un identificador con nombre tableRespon
        $("#tableRespon").append(data);
    });
}

//La función deleReg recibe un input con nombe numBoleta
//dicho input, recupera el numero de boleta perteneciente a el documento 
//methods.php
function deleteReg(numBoleta) {
    Swal.fire({
        title: 'Eliminar',
        text: "¿Seguro desea eliminar el registro?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = new FormData();
            data.append("controller", "delete");
            //El comando append, lo que hace es agregar un grupo de registros al final
            //del contenido ya existente
            data.append("numBoleta", numBoleta);
            $.ajax({
                type: 'POST',
                url: 'php/methods.php',
                data: data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                },
                success: function (data) {
                    if (data == "success") {
                        Swal.fire(
                            'Hecho',
                            'Registro eliminado',
                            'success'
                        );
                        location.href = "users.php"; 
                    }
                    else {
                        Swal.fire(
                            'Error',
                            data,
                            'error'
                        )
                    }
                }
            });
        }
    })
}

function updateReg(numBoleta, nombre, apellidos, carrera) {
    $("#exampleModal").modal('show');
    $("#inputNumBoleta").val(numBoleta);
    $("#inputNombre").val(nombre);
    $("#inputApellidos").val(apellidos);
    $("#selectCarrera").val(carrera);
}

$("#formGuardar").submit(function () {
    var data = new FormData(this);
    data.append("controller", "save");
    $.ajax({
        type: 'POST',
        url: 'php/methods.php',
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
        },
        success: function (data) {
            if (data == "success") {
                Swal.fire(
                    'Hecho',
                    'Registro guardado',
                    'success'
                );
                location.href = "users.php";
            }
            else {
                Swal.fire(
                    'Error',
                    data,
                    'error'
                )
            }
        }
    });
    return false;
});

$("#formUpdate").submit(function () {
    var data = new FormData(this);
    data.append("controller", "update");
    $.ajax({
        type: 'POST',
        url: 'php/methods.php',
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {   
        },
        success: function (data) {
            if (data == "success") {
                Swal.fire(
                    'Hecho',
                    'Registro guardado',
                    'success'
                );
                location.href = "users.php";
            }
            else {
                Swal.fire(
                    'Error',
                    data,
                    'error'
                )
            }
        }
    });
    return false;
});




