@extends("admin") 

@section("title", "Add a category")

@section("description", "Form for adding new categories")


@section("styles")
    <link rel="stylesheet" href="/css/categories.css">
@endsection

@section('content')
   
    <div class="categoriescontainer">
        <div>
			
			<article class="latest">
				
				<h3>Add a category</h3>
				<form method="post" action="/create-category">
					 {{ csrf_field()  }}

					<div>
						<label>Category name</label>
						<input type="text" name="name" value="{{ old('name') }}">
						@if($errors->has('name'))
							<span class="error">{{ $errors->first('name') }}</span>
						@endif
					</div>

					<div>
						<input type="submit" class="button btn btn-primary" value="Create category">
					</div>

				</form>
						
			</article>

			{{-- <a href="/submitcategory">Create a new category</a> --}}

		</div>



    </div>
    
@endsection

@section("scripts")

@endsection

