<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script>
    function activaterPlaceSerch(){
        var input = document.getElementById('autocomplete');
        var places = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(places, 'place_changed', function() {
            var place = places.getPlace();
            var address = place.formatted_address;
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();
            
            var item_Location = place.formatted_address;
            

            $("#btn-post:visible").attr("data-lat",latitude);
            $("#btn-post:visible").attr("data-lng",longitude);
            $("#btn-post:visible").attr("data-location",item_Location);

            $("#btn-main:visible").attr("data-lat",latitude);
            $("#btn-main:visible").attr("data-lng",longitude);
            $("#btn-main:visible").attr("data-location",item_Location);
            
        });

    }

    $('body').on("click","#btn-post",function(){
        var value = $("#autocomplete").val();
        if(value == null || value == ''){
            alert("please enter location");
        }else{
            var latitude = $("#btn-post").attr("data-lat");
            var longitude = $("#btn-post").attr("data-lng");
            var item_Location =  $("#btn-post").attr("data-location");
            
            $.ajax({
                type: "POST",
                url: "post.php",
                data: {'latitude': latitude, 'longitude': longitude,'item_Location':item_Location},
                success: function (data) {
                    window.location = 'post.php';  
                }
            });

        }
    });

    $('body').on("click","#btn-main",function(){
        var value = $("#autocomplete").val();
        if(value == null || value == ''){
            alert("please enter location");
        }else{
            var latitude = $("#btn-main").attr("data-lat");
            var longitude = $("#btn-main").attr("data-lng");
            var item_Location =  $("#btn-main").attr("data-location");
            
            $.ajax({
                type: "POST",
                url: "index.php",
                data: {'latitude': latitude, 'longitude': longitude,'item_Location':item_Location},
                success: function (data) {
                    window.location = 'index.php';  
                }
            });

        }
    });
</script>
<!--=============== scripts  ===============-->

<script type="text/javascript" src="assets/js/plugins.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBW43KgTNs_Kusuvbian6KYGi_QzXOLS4w&callback=activaterPlaceSerch"></script>
<script type="text/javascript" src="assets/js/map_infobox.js"></script>
<script type="text/javascript" src="assets/js/markerclusterer.js"></script>
<script type="text/javascript" src="assets/js/maps.js"></script>
