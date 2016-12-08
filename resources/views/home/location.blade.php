@extends("master")

@section("title", "Location")

@section("description", "This is the Location page")

@section("keywords","Dory's restaurant, location")

@section("styles")

	<link rel="stylesheet" href="/css/map.css">

@endsection

@section('content')

	<h1 id="visit"> </h1>

	<div id="dorys-map"> 	</div>


@endsection

@section("scripts")
	<script src="js/map.js"></script>
	<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYvgxg2BiEN1HyQaToWg_sd4_l5MQ9ZA&callback=initMap">
	</script>

@endsection
