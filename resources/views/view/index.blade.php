@extends("master")

@section("title", "Menus")

@section("description", "This is the Menus page")

@section("keywords","Dory's restaurant, menu, dishes")


@section("styles")
	<link rel="stylesheet" href="/css/viewMenus.css">
@endsection



@section("content")
	<h2>View menus </h2>
	
	<!-- <h2>Alphabetical listing of dishes</h2> -->
	 <div>
		 <?php foreach($allDishes as $dish): ?>
		 	<article class="latest">
				@if ( $dish->price > 0 )

			 		<img src="/images/Dishes/{{ $dish->image }}">
			 		<p id="dishname">{{ $dish->name }}</p>
			 		<div id="dishprice">
			 			<p>Php {{ $dish->price }} </p>
			 			<input type="checkbox" name="options[]" value="{{ $dish->dish_id }}">
			 		</div>
				@endif
		 		
		 	</article>
		 <?php endforeach ?>
	</div>
@endsection