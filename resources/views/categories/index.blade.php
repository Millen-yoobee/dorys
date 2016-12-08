@extends("admin") 

@section("title", "Categories")

@section("description", "Categories page")


@section("styles")
    <link rel="stylesheet" href="/css/categories.css">
@endsection

@section('content')
   
    <div class="categoriescontainer">
        <div>
			<?php foreach($allCategories as $category): ?>
				<article class="latest">

					<div>
						<p> {{ $category->name }}</p>
						
						<input type="checkbox" name="options[]" value="{{ $category->id }}">
					</div>
					
				</article>
			<?php endforeach ?>
		</div>
    </div>
    
@endsection

@section("scripts")

@endsection
