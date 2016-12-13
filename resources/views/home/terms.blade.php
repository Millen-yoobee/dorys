@extends("master")

@section("title", "T and C")

@section("description", "This is the Terms and Conditions page")

@section("keywords","Dory's restaurant, Terms, Conditions")

@section("styles")
	<link rel="stylesheet" href="/css/terms.css">

@endsection



@section("content")

{{--    <h3>Terms and Conditions </h3>
 --}}   
   <h4>
      For two-hour set menus
   </h4>
   
   <div>
      
       <p> {!! $term->two !!}</p>
   
   </div>
   

   <hr>

   <h4>
      For four-hour set menus
   </h4>
   
   <div>
       <p> {!! $term->four !!}</p>
   </div>

@endsection