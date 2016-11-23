window.jQuery(function() {
  // Handler for .ready() called.
  // console.log('dom is ready');
  initMap();
});

function initMap() {

  var map = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 12,
    center: uluru
  });
  //Obtener informacion de latitud y longitud
  $.get( '/getvehicles', function( vehiculos ) {
    $.get( '/obtenerUbicacion/1', function( ubicacion ) {
      // $( ".result" ).html( data );
      // alert( "Load was performed." );
      console.log('cargada data', ubicacion);
      var uluru = {lat: ubicacion.lat, lng: ubicacion.lng};
      var marker = new google.maps.Marker({
        position: uluru,
        label: ubicacion.placa,
        map: map
      });
    });
  });

  // console.log('ran init map');
}
