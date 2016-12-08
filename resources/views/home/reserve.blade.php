@extends("master")

@section("title", "Reservation form")

@section("description", "Reservation/booking form for functions")

@section("keywords","Dory's restaurant, menu, dishes, reserve, reservation, booking, book")


@section("styles")
	<link rel="stylesheet" href="/css/reserve.css">
@endsection


@section("scripts")
		<!-- Calendly inline widget begins -->
	<script type="text/javascript" src="https://calendly.com/assets/external/widget.js"></script>
		<!-- Calendly inline widget ends -->
@endsection



@section("content")

		<!-- Calendly inline widget begins -->
<!-- 	<div class="calendly-inline-widget" data-url="https://calendly.com/millen-c-wong/function" style="min-width:320px;height:580px;"> -->
	<div class="calendly-inline-widget" data-url="https://calendly.com/millen-c-wong/function">
	</div>
		<!-- Calendly inline widget ends -->


@endsection