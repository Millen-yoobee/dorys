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
		
		 <p> {{ $about->textarea }}</p>
	
	</div>
	
	<br>
	<br>

	<a href="/editabout">Edit</a>

    
@endsection


