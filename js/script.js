$(document).ready(function() {
    mostrarDatos();
    ///////////// GUARDAR Y MODIFICAR ///////////////
    $('#enviarDatos').submit(function(e) {
        e.preventDefault();
        const DATOS = {
            base: $('#base').val(),
            altura: $('#altura').val(),
            idTriangulo: $('#idTriangulo').val()
        };
        $.post('guardarDatos.php', DATOS, function(respuesta) {
            $('#mensajes').html(respuesta);

            $('#enviarDatos').trigger('reset');
            $('#btnEnviar').html("Guardar registro");
            $('#idTriangulo').val("");
            mostrarDatos();
        });
    });

    ///////////// LOGIN ///////////////  
    $('#formLogin').submit(function(e) {
        e.preventDefault();
        const DATOS = {
            usuario: $('#usuario').val(),
            password: $('#password').val()
        };
        $.post('login.php', DATOS, function(respuesta) {
            var datos = JSON.parse(respuesta);
            if (datos == "aprobado") {
                location.href = "index.php";
            } else {
                $('#mensajes').html(respuesta);
                $('#formLogin').trigger('reset');
            }
        });
    });

    ///////////// MOSTRAR ///////////////  
    function mostrarDatos() {
        $.ajax({
            url: 'mostrarDatos.php',
            type: 'GET',
            success: function(respuesta) {
                var datos = JSON.parse(respuesta);
                var mostrar = "";
                datos.forEach(fila => {
                    mostrar += `
                <tr>
                    <td>${fila.id}</td>
                    <td>${fila.altura}</td>
                    <td>${fila.base}</td>
                    <td>${fila.area}</td>
                    <td>
                    <button  id='${fila.id}' class='btn btn-warning btn-sm mr-3 ml-3 modificar'>📝</button>
                    <button id='${fila.id}'  class='btn btn-danger btn-sm borrar'>🗑</button>
                    </td>              
                </tr>
                `
                });
                $('#contenido').html(mostrar);
            }
        });
    }

    $(document).on('click', '.modificar', function() {
        var idTriangulo = $(this)[0].id;
        const DATOS = {
            id: idTriangulo
        };
        $.post('seleccionarRegistro.php', DATOS, function(respuesta) {
            var datos = JSON.parse(respuesta);
            //$('#mensajes').html(respuesta);
            datos.forEach(fila => {
                $('#base').val(fila.base);
                $('#altura').val(fila.altura);
                $('#idTriangulo').val(fila.id);
            });
            $('#btnEnviar').html("Modificar datos")
        });
    });
    //p0301596343
    $(document).on('click', '.borrar', function() {
        Swal.fire({
            title: '¿Estás seguro de borrar el registro?',
            text: "no será posible recuperar el registro!!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, borrarlo!'
        }).then((result) => {
            if (result.value) {
                var idTriangulo = $(this)[0].id;
                const DATOS = {
                    id: idTriangulo
                };
                $.post('borrarDatos.php', DATOS, function(respuesta) {
                    $('#mensajes').html(respuesta);
                    mostrarDatos();
                });

                Swal.fire(
                    'Registro borrado!',
                    'el registro ha sido borrado.',
                    'exitosamente'
                )
            }
        })



    });

    function borrarRegistro() {

    }

});