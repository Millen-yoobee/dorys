@extends("admin") 

@section("title", "Dishes")

@section("description", "For viewing, adding, deleting or updating dishes")


@section("styles")
    <link rel="stylesheet" href="/css/dishes.css">
@endsection

@section('content')
   
    <div class="dishescontainer">
        
    </div>

	<h3>Short Dishes Orders </h3>
	
	<a href="/adddish">Click to add a new dish</a>

	<br>
	<br>

	<div class="menuList">
		@if (count ($allDishes) )

			@foreach ($allDishes as $dish)
				<div class="dishItem">
					<p id="dishName"> {{ $dish->name }} </p>
					<p> Php {{ $dish->price }} </p>
					<a href="/deletedish/{{ $dish->dish_id }}">Delete</a>
					<a href="/editdish/{{ $dish->dish_id }}">Edit</a>
				</div>
			@endforeach 

		@endif
	
	</div>

    
@endsection

@section("scripts")

@endsection
