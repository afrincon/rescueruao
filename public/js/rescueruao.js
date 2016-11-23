window.jQuery(function() {
  // Handler for .ready() called.
  // console.log('dom is ready');
  initMap();
});

function initMap() {
    var centroMapa = {lat: 3.454956, lng: -76.5183073};
    var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 12,
        center: centroMapa
    });


    //Obtener informacion de latitud y longitud
    /*$.get( '/getvehicles', function( vehiculos ) {
        $.get( '/obtenerUbicacion/1', function( ubicacion ) {
            // $( ".result" ).html( data );
            // alert( "Load was performed." );
            // console.log('cargada data', ubicacion);
            ubicacion.lat = parseFloat(ubicacion.lat, 10);
            ubicacion.lng = parseFloat(ubicacion.lng, 10);
            var uluru = {lat: ubicacion.lat, lng: ubicacion.lng};

            var marker = new google.maps.Marker({
                position: uluru,
                label: ubicacion.placa,
                map: map
            });
        });

    });*/

    getLocations();
    // console.log('ran init map');
}

function getLocations() {
    var arr = [];
    $.get('/getvehicles', function (vehiculos) {
        console.log('Cantidad de Vehiculos:' +vehiculos.cantidad);
        for (i=1; i<=vehiculos.cantidad; i++) {

            $.get('/obtenerUbicacion/' + i , function (ubicacion) {
                ubicacion.lat = parseFloat(ubicacion.lat, 10);
                ubicacion.lng = parseFloat(ubicacion.lng, 10);
                arr.push([ubicacion.placa, ubicacion.lat, ubicacion.lng]);
            })

        }
    });

    console.log(arr);
    return arr;
}
