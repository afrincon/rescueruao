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
  // $.get( '/getvehicles', function( vehiculos ) {
  //   $.get( '/obtenerUbicacion/1', function( ubicacion ) {
  //     // $( ".result" ).html( data );
  //     // alert( "Load was performed." );
  //     // console.log('cargada data', ubicacion);
  //     ubicacion.lat = parseFloat(ubicacion.lat, 10);
  //     ubicacion.lng = parseFloat(ubicacion.lng, 10);
  //     var uluru = {lat: ubicacion.lat, lng: ubicacion.lng};
  //     var marker = new google.maps.Marker({
  //       position: uluru,
  //       label: ubicacion.placa,
  //       map: map
  //     });*
  //   });
  // });

  // console.log('ran init map');

    // Trigger downloadUrl at an interval
    $.get( '/getvehicles', function( vehiculos ) {
        var locations = [];
        for(var i = 1; i <= vehiculos.cantidad; i++) {
            $.get( '/obtenerUbicacion/'+ i, function( ubicacion ) {
                //console.log(ubicacion);
                ubicacion.lat = parseFloat(ubicacion.lat, 10);
                ubicacion.lng = parseFloat(ubicacion.lng, 10);
                locations.push([ubicacion.placa, ubicacion.lat, ubicacion.lng]);
                // console.log(locations);
                var tipo ='';
                var image_icon = '';

                if(ubicacion.tipo === 'tipo1') {
                    tipo = 'Ambulancia Asistencial'
                } else {
                    tipo = 'Ambulancia no Asistencial'
                }

                if(ubicacion.estadoactual === 'Disponible') {
                    image_icon = '/images/icon-avaliable.png';
                } else {
                    image_icon = '/images/icon-busy.png';
                }

                var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h3 id="firstHeading" class="firstHeading">' +  ubicacion.placa + '</h3>'+
                    '<div id="bodyContent">'+
                    '<p>Esta Ambulancia es de tipo <b>'+ tipo +'</b><br />' +
                    '<p>Actualmente se encuentra: <b>'+ ubicacion.estadoactual +'</b><br />' +
                    '</div>'+
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });


                var marker = new google.maps.Marker({
                    position: {lat: ubicacion.lat, lng: ubicacion.lng},
                    /*label: ubicacion.placa,*/
                    map: map,
                    icon: image_icon
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            });
        }

    });

    $.get('/obtenerservicios', function (servicios) {

        for (i=0; i<servicios.length; i++){
            $.get('/obtenerinformacionservicio/' + servicios[i], function (serviciosprestados) {
                serviciosprestados.latitud = parseFloat(serviciosprestados.latitud, 10);
                serviciosprestados.longitud = parseFloat(serviciosprestados.longitud, 10);
                var image = '/images/icon-service.png';

                var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h3 id="firstHeading" class="firstHeading">' +  serviciosprestados.servicio+ '</h3>'+
                    '<div id="bodyContent">'+
                    '<p>usurio solicitante: <b>'+ serviciosprestados.suscriptor +'</b><br />' +
                    '<p>Ubicada en: <b>Direccion</b><br />' +
                    '</div>'+
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });


                var marker = new google.maps.Marker({
                    position: {lat: serviciosprestados.latitud, lng: serviciosprestados.longitud},
                    map: map,
                    icon: image
                });

                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });

            });
        }
    });

}


/*function geocodeLatLng(geocoder, latitude, longitud) {
    var latlng = {lat: latitude, lng: longitud};
    address = '';
    geocoder.geocode({'location': latlng}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {

                address = results[1].formatted_address;


            } else {
                window.alert('No results found');
            }
        } else {
            window.alert('Geocoder failed due to: ' + status);
        }
    });
    return address;
}*/
