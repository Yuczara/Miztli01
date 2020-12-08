var map;

function initMap() {
    var miztli = {
        lat: 20.387609800683077,
        lng: -100.01141393308363

    };

    map = new google.maps.Map(document.getElementById("map"), {
        center: miztli,
        zoom: 18
    });

    marker = new google.maps.Marker({
        position: miztli,
        map: map,
        title: 'Oficinas de miztli',
        icon: 'images/icons/marcador-de-posicion.png'
    });

    infoWindow = new google.maps.InfoWindow({
        content: `<h1>Miztli</h1>
                   <br>
                   <p>Direccion: Av. La Palma #125, Vistahermosa</p>`
    });

    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.open(map, marker);
    });
    /*
    Eventos
    -click
    -dbclick
    -mouseup
    -mouseover
    -mouseout
    */
}