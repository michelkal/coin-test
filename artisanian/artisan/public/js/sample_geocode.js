 // Java
 var center = new google.maps.LatLng(6.4261139, 3.4363691);

    // Jakarta, Bogor, Bekasi, Tangerang, Surabaya
    var locations = [
    {lat: 6.512596400000001, lng: 3.3541297}
    ];

    var mapContainer = $('.map-container'),
    map          = new google.maps.Map(mapContainer[0], {
        center: center,
        zoom  : 10
    });

    var markers = _(locations)
    .map(function (loc) {
        return new google.maps.Marker({
            position: new google.maps.LatLng(loc.lat, loc.lng)
        });
    })
    .each(function (marker) {
        marker.setMap(map);
    })
    .value();

    var mc = new MarkerClusterer(map, markers);

    var directionsService = new google.maps.DirectionsService(),
    directionsDisplay = new google.maps.DirectionsRenderer(),
    displayRoute      = function () {
        directionsService.route({
                 origin: new google.maps.LatLng(6.512596400000001, 3.3541297), // Pass this in place of the address 'Akin Ogunlewe street VI'
                 destination: new google.maps.LatLng(6.4261139, 3.4363691),
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