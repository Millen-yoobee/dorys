@if(Session::has('Cart'))

<div class="alert alert-success" role="alert">
	<?php 
		// echo "<pre>";
		// print_r(Session::get('Cart'));
		// echo "</pre>";
		$cart = Session::get('Cart');
	?>
	<h3>Order list </h3>
	@foreach($cart as $Dish)
		<div class="orderItem"> 
			<p>{{ $Dish['Dish_id']  }}</p>
		 	<p>{{ $Dish['Name']  }}</p>
		 	<p>Php {{ $Dish['Price']  }}</p>
		 	<p>{{ $Dish['Quantity']  }}</p>
		 	<p> Php {{ $Dish['Subtotal']  }}</p>

		</div>

	 	
	@endforeach

 	<a href="/checkout"> Go to checkout></a>

</div>

@endif