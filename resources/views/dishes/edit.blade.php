@extends("admin") 

@section("title", "Edit Dish")

@section("description", "Form for updating a dish")


@section("styles")
    <link rel="stylesheet" href="/css/dishes.css">
@endsection

@section('content')
   
    <div class="dishescontainer">
        
    </div>

	<h3>Edit a dish </h3>
	
	<br>

	<div class="menuList">

		<article class="latest">
				
			<form method="post" action="/update-dish/{{ $dish->dish_id }}" enctype="multipart/form-data">
				 {{ csrf_field()  }}

				<div>
					<div>
					 	Change dish name "{{ $dish->name }}" to 
							<input type="text" name="name" value="{{ $dish->name }}">
							@if($errors->has('name'))
								<span class="error">{{ $errors->first('name') }}</span>
							@endif
							
					</div>

					<div>
						Change category "{{ $dish->category }}" to
						<select name="category" value="{{ $dish->category }}">
							@foreach ($allCategories as $category)
								<option> {{ $category->name }} </option>
							@endforeach	
						</select>
						@if($errors->has('category'))
							<span class="error">{{ $errors->first('category') }}</span>
						@endif
					</div>

					<div>
					 	
					 	Change price from Php {{ $dish->price }} to 
							<input type="text" name="price" value={{ $dish->price }}>
							@if($errors->has('price'))
								<span class="error">{{ $errors->first('price') }}</span>
							@endif
						</p>	
					</div>

					<div>
						<label>Image</label>
						<input type="file" name="image" src="/images/Dishes/{{$dish->image}}">
						@if($errors->has('image'))
							<span class="error">{{ $errors->first('image') }}</span>
						@endif
					</div>

				</div>

				<div>
					<input type="submit" class="btn btn-primary" value="Update dish">
				</div>

			</form>
					
		</article>	
	
	</div>

    
@endsection

@section("scripts")

@endsection
