  @extends("admin") 

@section("title", "About Us - Admin")

@section("description", "About Us - Admin page")

@section("styles")
    {{-- <link rel="stylesheet" href="/css/editabout.css"> --}}
@endsection
 

@section('content')
    
	<h3>About us </h3>
	
	
	<div>
		 <p> {!! $about->textarea !!}</p>
	</div>
	
	<br>
	<br>

	<a href="/editabout">Edit</a>

    
@endsection


