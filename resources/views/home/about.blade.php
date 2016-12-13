@extends("master")

@section("title", "About")

@section("description", "This is the About Us page")

@section("keywords","Dory's restaurant, about us")


@section("styles")
	<link rel="stylesheet" href="/css/about.css">
@endsection



@section("content")


	<h2>About Us </h2>
	<br>
	<div>
		 <p> {!! $about->textarea !!}</p>
	</div>


@endsection