<script>
    function activaterPlaceSerch(){
        var input = document.getElementById('autocomplete');
        var places = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(places, 'place_changed', function() {
            var place = places.getPlace();
            var address = place.formatted_address;
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();z
            console.log(latitude);
            console.log(longitude);
            exit;
        });

    }
</script>
<!--=============== scripts  ===============-->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/plugins.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBW43KgTNs_Kusuvbian6KYGi_QzXOLS4w&callback=activaterPlaceSerch"></script>
<script type="text/javascript" src="assets/js/map_infobox.js"></script>
<script type="text/javascript" src="assets/js/markerclusterer.js"></script>
<script type="text/javascript" src="assets/js/maps.js"></script>
