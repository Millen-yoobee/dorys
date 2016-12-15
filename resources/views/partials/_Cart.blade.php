@if(Session::has('Cart'))

<div class="alert alert-success" role="alert">
	<?php 
		echo "<pre>";
		print_r(Session::get('Cart'));
		echo "</pre>";
		$cart = Session::get('Cart');

	 ?>
	 @foreach($cart as $Dish)
	 	<h1><?= $Dish['Dish_id']  ?></h1>
	 	
	 @endforeach
</div>

@endif