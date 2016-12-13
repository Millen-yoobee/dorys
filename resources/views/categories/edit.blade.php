@extends("admin") 

@section("title", "Edit a category")

@section("description", "Form for editing categories")


@section("styles")
    <link rel="stylesheet" href="/css/categories.css">
@endsection

@section('content')
   
    <div class="categoriescontainer">
			
				
		<h3>Edit a category</h3>
		<br>
		<form method="post" action="/updatecategory/{{ $category->id }}  ">
			 {{ csrf_field()  }}
			 	<p class="categoryline"> Change "{{ $category->name }}" to 
					<input type="text" name="name" value="{{ $category->name }}">
					@if($errors->has('name'))
						<span class="error">{{ $errors->first('name') }}</span>
					@endif
				</p>	
				<input type="submit" class="button" value="Update Category">
		</form>
			
    </div>
    
@endsection

@section("scripts")

@endsection

