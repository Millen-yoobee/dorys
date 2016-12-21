@extends("admin") 

@section("title", "Dishes")

@section("description", "For viewing, adding, deleting or updating dishes")


@section("styles")
    <link rel="stylesheet" href="/css/dishes.css">
@endsection

@section('content')
   
    <div class="dishescontainer">
        
    </div>

	{{-- <h3>Short-Order Dishes </h3> --}}
	
	<a href="/add-dish">Click to add a new dish</a>

	<br>
	<br>

	<div class="menuList">
		@if (count ($allDishes) )

			@foreach ($allDishes as $dish)
				<div class="dishItem">
					<p id="dishName"> {{ $dish->name }} </p>
					<p> Php {{ $dish->price }} </p>
					<a href="/delete-dish/{{ $dish->dish_id }}">Delete</a>
					<a href="/edit-dish/{{ $dish->dish_id }}">Edit</a>
				</div>
			@endforeach 

		@endif
	
	</div>

    
@endsection

@section("scripts")

@endsection
