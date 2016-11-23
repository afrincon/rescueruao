window.jQuery(function() {
  // Handler for .ready() called.
	console.log('dom is ready');
});

function initMap() {
  var uluru = {lat: 3.454956, lng: -76.5183073};
  var map = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 4,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}