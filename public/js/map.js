function initMap() {
	// alert("Go");   to test that the api is working

	var theDiv = document.querySelector("#dorys-map");

	// Data on Dory's
	var dorysData = {
		lat: 14.792761,
		lng: 121.070585
	// icon: 'filename.jpg'
	};

	var mapOptions = {
		zoom: 18,
		center: dorysData
	};

	// Create the map
	var theMap = new google.maps.Map(theDiv, mapOptions);

	var dorysMarkerOptions = {
		position: dorysData,
		map: theMap,
		icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png' 
	};

	// Now we can create markers
	var dorysMarker = new google.maps.Marker(dorysMarkerOptions);

	// Find out where the user is
	// Make sure the device has Geolocation capabilities
	// if ( navigator.geolocation ) {

	// 	// Yes, the device has geolocation capability
	// 	navigator.geolocation.getCurrentPosition( function(position){
	// 		console.log(position);
	// 		var userData = {
	// 			lat: position.coords.latitude,
	// 			lng: position.coords.longitude
	// 		};

	// 		// Prepare the user marker options
	// 		var userMarkerOptions = {
	// 			position: userData,
	// 			map: theMap
	// 		};
	// 		// Create a marker to represent the user
	// 		var userMarker = new google.maps.Marker( userMarkerOptions ); 
	// 		userMarker.setAnimation(google.maps.Animation.DROP);

	// 		// Focus on the user's location
	// 		theMap.panTo(userData);

	// 		// Prepare the nerd (Good at calculating routes)
	// 		var directionsService = new google.maps.DirectionsService();

	// 		// Prepare the artist (to draw the directons on the map)
	// 		var directionsDisplay = new google.maps.DirectionsRenderer();

	// 		// Tell the artist which map to paint on
	// 		directionsDisplay.setMap(theMap);

	// 		// Direction settings 
	// 		var directionSettings = {
	// 			origin: userData,
	// 			destination: dorysData,
	// 			travelMode: google.maps.TravelMode["DRIVING"]  // WALKING, BICYCLING, TRANSIT
	// 		};

	// 		// Do the calculations (this actually gets send to Google)
	// 		directionsService.route(directionSettings, function(response, status) {
	// 			// Once the math is complete
	// 			if (  status == "OK") {
	// 				// Tell the artist to draw on the map
	// 				directionsDisplay.setDirections(response);
	// 			}
 //  			});

	// 	});


	// } else {
	// 	// No!!!
	// }


}