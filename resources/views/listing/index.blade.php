@extends("master")


@section("title", "Menu list")

@section("description", "This is the menu list page")

@section("keywords","Dory's restaurant, menu, list")

@section("styles")
	<link rel="stylesheet" href="/css/listing.css">
@endsection



@section("content")

	<h3>Menu list </h3>

	<div class="menuList">
		@if (count ($allDishes) )

			@foreach ($allDishes as $dish)
				<div class="dishItem">
				<a href="/deleteproduct/{{ $dish->dish_id }}">Delete</a>
				@if ( $dish->price > 0 )
						<p id="dishName"> {{ $dish->name }} </p>
						<p> Php {{ $dish->price }} </p>
						<select name="qtty" id="qtty" value="0">
							<option value="0"> </option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4 </option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">6</option>
							<option value="9">7</option>
						</select>
				@endif
				</div>
			@endforeach 
		@endif
	
	</div>


	<!-- Below codes for future enhancements   -->         
<!-- 	<div class="menuList">
		@if (count ($allSetMenus) )	
			@foreach ($allSetMenus as $set)
				<div class="dishItem">
					<p> {{ $set->name }} </p>
					<p> Php {{ $set->price }} </p>
					<p>	{{ $set->duration }} </p>
					<select name="qtty" id="qtty" value="0">
						<option value="0"> </option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4 </option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">6</option>
						<option value="9">7</option>
					</select> 				
				</div>
			@endforeach
		@endif		
	</div> -->

@endsection