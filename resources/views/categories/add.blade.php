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
				
				<h1>Add New Category</h1>
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
						<input type="submit" class="btn btn-primary" value="Create Category">
					</div>

				</form>
						
			</article>

			{{-- <a href="/submitcategory">Create a new category</a> --}}

		</div>



    </div>
    
@endsection

@section("scripts")

@endsection

