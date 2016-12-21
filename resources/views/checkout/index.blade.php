@extends("master")

@section("title", "Checkout")

@section("description", "This is the checkout page")

@section("keywords","Dory's restaurant")


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
		
			@foreach($cart as $Dish)
				<form class="orderItem" method="post" action="/checkout/{{$Dish['Dish_id']}}"> 
					{!! csrf_field() !!}

					<p>{{ $Dish['Dish_id']  }}</p>
				 	<p>{{ $Dish['Name']  }}</p>
				 	<p>Php {{ $Dish['Price']  }}</p>

				 	<p>{{ $Dish['Quantity']  }}</p>

					<select name="quantity" class="qtty">
					<option>0</option>
					@for($i=1; $i<10; $i++)
						@if($Dish['Quantity'] == $i)
							<?php $selected = ' selected="selected"'; ?>
						@else
							<?php $selected = ''; ?>
						@endif 
						<option <?= $selected ?>>{{ $i }}</option>
					@endfor
					</select>

				 	<p> Php {{ $Dish['Subtotal']  }}</p>

					<input class="button" type="submit" name="updateCart" value="Update order list">


				</form>
			@endforeach

		<br>
	 	<div> <a class="btn" href=#> Proceed to pay </a></div>
	 	{{-- <div> <a class="btn" href="/pay"> Proceed to pay </a></div> --}}
	 	<br>
	 	{{-- <div> <a class="btn" href="/email"> Email order</a></div> --}}
	 	<br>
	 	{{-- <div> <a class="btn" href="/text"> Text order</a></div> --}}
	 	
	 	

	</div>

@endif
@endsection


