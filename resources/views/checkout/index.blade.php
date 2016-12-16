@extends("master")

@section("title", "Menus")

@section("description", "This is the templage page")

@section("keywords","Dory's restaurant, menu, dishes")


@section("styles")
	<link rel="stylesheet" href="/css/listing.css">
@endsection



@section("content")

	@if(Session::has('Cart'))

	<div class="alert alert-success" role="alert">
		<?php 
			// echo "<pre>";
			// print_r(Session::get('Cart'));
			// echo "</pre>";
			$cart = Session::get('Cart');
		?>
		<h3>Checkout list </h3>
		
		<form method="post" action="">
			@foreach($cart as $Dish)
				<div class="orderItem"> 
					@if ($Dish['Quantity'] > 0)
						<p>{{ $Dish['Dish_id']  }}</p>
					 	<p>{{ $Dish['Name']  }}</p>
					 	<p>Php {{ $Dish['Price']  }}</p>

					 	<p>{{ $Dish['Quantity']  }}</p>

						<select name="quantity" class="qtty" value="$Dish['Quantity']">
							<option value="0" selected>0</option>
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


					 	<p> Php {{ $Dish['Subtotal']  }}</p>
					@endif
				</div>
			@endforeach
		</form>
	 	<a href="/checkout"> Proceed to payment ></a>

	</div>

@endif
@endsection


