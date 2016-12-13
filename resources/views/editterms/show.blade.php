  @extends("admin") 

@section("title", "Terms - Admin")

@section("description", "Terms and Conditions - Admin page")

@section("styles")
    {{-- <link rel="stylesheet" href="/css/editabout.css"> --}}
@endsection
 

@section('content')
    
	<h3>Terms and Conditions </h3>
	
	<h4>
		For two-hour set menus
	</h4>
	
	<div>
		
		 <p> {!! $term->two !!}</p>
	
	</div>
	
	<a href="/editterms2">Edit</a>

	<hr>

	<h4>
		For four-hour set menus
	</h4>
	
	<div>
		 <p> {!! $term->four !!}</p>
	</div>

	<br>

	<a href="/editterms4">Edit</a>

    
@endsection


