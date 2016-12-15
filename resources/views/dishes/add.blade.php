@extends("admin") 

@section("title", "Dishes")

@section("description", "Form for creating a new dish")


@section("styles")
    <link rel="stylesheet" href="/css/dishes.css">
@endsection

@section('content')
   
    <div class="dishescontainer">
        
    </div>

	<h3>Add a new dish </h3>
	

	<br>
	<br>

	<div class="menuList">
		@if (count ($allDishes) )

			@foreach ($allDishes as $dish)
				<div class="dishItem">
					<p id="dishName"> {{ $dish->name }} </p>
					<p> Php {{ $dish->price }} </p>
					<a href="/adddish/{{ $dish->dish_id }}">Add</a>
				</div>
			@endforeach 

		@endif
	
	</div>

    
@endsection

@section("scripts")

@endsection
