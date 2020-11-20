$(document).ready(function() {

    $("#btnComentarios").click(function(e) {
        e.preventDefault();
        //alert("Comentarios enviados correctamente");
        agregarDatos();
    });


    async function agregarDatos() {
        const datos = new FormData(document.getElementById('coment'));

        await fetch('assets/data/Contacto.php', {
            method: 'POST',
            body: datos
        })

        .then(response => response.json())
            .then(response => {
                //console.log(response.data);
                if (response.dato == 'ok') {
                    alert("Información enviada correctamente!");
                } else {
                    alert("Datos Incorrectos");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});