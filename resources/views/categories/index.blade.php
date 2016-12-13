@extends("admin") 

@section("title", "Categories")

@section("description", "Categories page")


@section("styles")
    <link rel="stylesheet" href="/css/categories.css">
@endsection

@section('content')
   
    <div class="categoriescontainer">
    	@if ( count ($allCategories) )
			@foreach ($allCategories as $category)	
				<div class="categoryline">
					<p> {!! $category->name !!}</p>
					<div>
						<a href="/deletecategory/{{ $category->id }}">Delete</a>
						<a href="/editcategory/{{ $category->id }}">Edit</a>
					</div>
				</div>
			@endforeach
		@endif
		<br>
		<br>
		<a href="/addcategory">Add a new category</a>

    </div>
    
@endsection

@section("scripts")

@endsection
