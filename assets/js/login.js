$(document).ready(function() {

    $("#btnLogin").click(function(e) {
        e.preventDefault();
        /*
                var user = $("#inputUser").val().trim();
                var pass = $("#inputPassword").val().trim();

                console.log(user + " " + pass);
        */
        mostrarDato();
    });


    async function mostrarDato() {
        const datos = new FormData(document.getElementById('formulario'));

        await fetch('assets/data/login.php', {
            method: 'POST',
            body: datos
        })

        .then(response => response.json())
            .then(response => {
                //console.log(response.data);
                if (response.dato == 'ok') {
                    location.href = "index2.php"
                } else if (response.dato == 'admin') {
                    location.href = "admin.php"
                } else {
                    alert("Datos Incorrectos")
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});