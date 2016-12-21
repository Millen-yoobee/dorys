@extends("admin") 

@section("title", "New dish")

@section("description", "Form for entering details of a new dish")


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
		<article class="latest">
				
			<form method="post" action="/create-dish" enctype="multipart/form-data">
				 {{ csrf_field()  }}

				<div>
					<div>
						<label>Dish name</label>
						<input type="text" name="name" value="{{ old('name') }}">
						@if($errors->has('name'))
							<span class="error">{{ $errors->first('name') }}</span>
						@endif
					</div>
					<div>
						<label>Category</label>
						{{-- <input type="text" name="category" value="{{ old('category') }}"> --}}
						<select name="category">
							@foreach ($allCategories as $category)
								<option value="{{ $category->name }}"> {{ $category->name }} </option>
							@endforeach	
						</select>


						@if($errors->has('category'))
							<span class="error">{{ $errors->first('category') }}</span>
						@endif
					</div>
					<div>
						<label>Price</label>
						<input type="text" name="price" value="{{ old('price') }}">
						@if($errors->has('price'))
							<span class="error">{{ $errors->first('price') }}</span>
						@endif
					</div>
					<div>
						<label>Image</label>
						<input type="file" name="image" placeholder="Dish image">
						@if($errors->has('image'))
							<span class="error">{{ $errors->first('image') }}</span>
						@endif
					</div>

				</div>

				<div>
					<br>
					<input type="submit" class="button btn-primary" value="Add the new dish">
				</div>

			</form>
					
		</article>	
	</div>

    
@endsection

@section("scripts")

@endsection
