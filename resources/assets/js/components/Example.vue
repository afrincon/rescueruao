<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="mapa"></div>
            </div>
        </div>
    </div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZTMV320Z8FMSdJN4dc29uzzqKIa2GWA0&callback=initMap">
    </script>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }

        function initMap() {
          var uluru = {lat: -25.363, lng: 131.044};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
    }
</script>
