@extends("admin") 

@section("title", "Delete category")

@section("description", "Form for confirming deletion of a category")


@section("styles")
    <link rel="stylesheet" href="/css/categories.css">
@endsection

@section('content')
   
    <div class="categoriescontainer">
			
				
		<h3>Delete a category</h3>
		<br>
		<form method="post" action="/removecategory/{{ $category->id }}">
			 {{ csrf_field()  }}
			
				<p class="categoryline">Category to delete :  {{ $category->name }} </p>
			
			<input type="submit" class="button" value="Confirm deletion">
		</form>
			
    </div>
    
@endsection

@section("scripts")

@endsection

