window.jQuery(function() {
  // Handler for .ready() called.
  // console.log('dom is ready');
  initMap();
});

function initMap() {
  var centroMapa = {lat: 3.454956, lng: -76.5183073};
  var bounds = new google.maps.LatLngBounds();
  var map = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 12,
    center: centroMapa,
    mapTypeId: 'roadmap'
  });
  map.setTilt(45);

  var markers = new Array();
  var infoWindowContent = new Array();

  //Obtener informacion de latitud y longitud
  $.get( '/getvehicles', function( vehiculos ) {
    for (i = 1;  i <= vehiculos.cantidad; i++){
      $.get( '/obtenerUbicacion/'+i, function( ubicacion ) {
        // $( ".result" ).html( data );
        // alert( "Load was performed." );
        // console.log('cargada data', ubicacion);
        ubicacion.lat = parseFloat(ubicacion.lat, 10);
        ubicacion.lng = parseFloat(ubicacion.lng, 10);
        /*var uluru = {lat: ubicacion.lat, lng: ubicacion.lng};

        var marker = new google.maps.Marker({
          position: uluru,
          label: ubicacion.placa,
          map: map
        });*/
        markers.push([ubicacion.placa, ubicacion.lat, ubicacion.lng]);
      });
    }
    for( i = 0; i < markers.length; i++ ) {
      var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
      bounds.extend(position);
      marker = new google.maps.Marker({
        position: position,
        map: map,
        title: markers[i][0]
      });
    }
  });


  // console.log('ran init map');
}
