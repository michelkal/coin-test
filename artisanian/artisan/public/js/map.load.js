$(document).on('click', '#mapLoader', function(event) {
	
	$('#map_canvas').addClass('map');

	var forms = document.querySelector('form#maskForm');
	var request = new XMLHttpRequest();
	var formDatas = new FormData(forms);
	request.open('post','/map');
	request.send(formDatas);

	request.onreadystatechange = function() {
		if (request.readyState === 4) {
			if (request.status === 200) {
				if (request.responseText != "failed") {
					/*Start*/
					var myJSONResult = JSON.parse(request.responseText);
					for (i = 0; i < myJSONResult.results.length; i++) {
						/*Surulere*/
						var latUserAd  = myJSONResult.results[i].geometry.location.lat;
						var longUserAd = myJSONResult.results[i].geometry.location.lng;
					}/*Finish*/
					
					/*Current Location*/
					var output = document.getElementById("map_canvas");

					if (!navigator.geolocation){
						output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
						return;
					}

					function success(position) {
						var latitude  = position.coords.latitude;
						var longitude = position.coords.longitude;


						/*Draw and display the map alert(latUserAd+' and '+longUserAd);*/
						var center = new google.maps.LatLng(latUserAd, longUserAd);

    // Jakarta, Bogor, Bekasi, Tangerang, Surabaya
    var locations = [
    {lat: latitude, lng: longitude}
    ];

    var mapContainer = $('#map_canvas'),
    map  = new google.maps.Map(mapContainer[0], {
    	center: center,
    	zoom  : 35
    });

    var markers = locations.map(function (loc) {
    	return new google.maps.Marker({
    		position: new google.maps.LatLng(loc.lat, loc.lng)
    	});
    });

    //var mc = new MarkerClusterer(map, markers);

    var directionsService = new google.maps.DirectionsService(),
    directionsDisplay = new google.maps.DirectionsRenderer();
    /*alert(latitude+" and "+longitude);
    alert(latUserAd+' and '+longUserAd);*/
    var displayRoute      = function () {
    	directionsService.route({
                 origin: new google.maps.LatLng(latitude, longitude), // Pass this in place of the address 'Akin Ogunlewe street VI'
                 destination: new google.maps.LatLng(latUserAd, longUserAd),
                 travelMode : google.maps.TravelMode.DRIVING
             }, function (response, status) {
             	if (status === google.maps.DirectionsStatus.OK) {
             		directionsDisplay.setDirections(response);

             	} else {
             		console.log('Directions request failed due to ' + status);
             	}
             });
    };

    directionsDisplay.setMap(map);
    displayRoute();
    /*End map draw*/
};

function error() {
	output.innerHTML = "Unable to retrieve your location";
};

output.innerHTML = "<p>Locating…</p>";

navigator.geolocation.getCurrentPosition(success, error);
/*End current Location*/

}else{
	/*No data received*/
};

} else {
            // not OK
            return;
        }
    }
};
});







