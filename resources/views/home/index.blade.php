@extends("master")

@section("title", "Home")

@section("description", "This is the Home page")

@section("keywords","Dory's restaurant")

@section("styles")
    <link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
   
    <div id="homepage">
        
        <div>
            <h3> Welcome </h3>
        </div>
        <br>

        <div id="address"> 
            <h4> Come dine with us at: </h4>
            <h5> 9033 Provincial Road </h5>
            <h5> Barangay Maharlika </h5>
            <h5> San Jose del Monte, Bulacan </h5>
        </div>
    </div>
    
@endsection

@section("scripts")

@endsection
