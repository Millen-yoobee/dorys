@extends("admin") 

@section("title", "Delete a dish")

@section("description", "Form for deleting dishes")


@section("styles")
    <link rel="stylesheet" href="/css/dishes.css">
@endsection

@section('content')
   
    <div class="dishescontainer">
        

		<h3>Delete a dish </h3>
		<br>
		<form method="post" action="/remove-dish/{{ $dish->dish_id }}">
			{{ csrf_field() }}

			<div class="menuList">

					<div>
						<p> Dish name: {{ $dish->name }} </p>
						<p> Category  : {{ $dish->category }} </p>
						<p> Price     : Php {{ $dish->price }} </p>
					</div>
		
			</div>
		<input type="submit" class="button" value="Confirm deletion">
		</form>
    </div>

    
@endsection

@section("scripts")

@endsection
