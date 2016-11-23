window.jQuery(function() {
  // Handler for .ready() called.
  // console.log('dom is ready');
  initMap();
});

function initMap() {
  var uluru = {lat: 3.454956, lng: -76.5183073};
  var map = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 12,
    center: uluru
  });
  //Obtener informacion de latitud y longitud
  $.get( '/getvehicles', function( data ) {
    // $( ".result" ).html( data );
    // alert( "Load was performed." );
    console.log('cargada data', data);
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
  // console.log('ran init map');
}
