@extends("admin") 

@section("title", "Edit About")

@section("description", "Edit form for About Us")

@section("styles")
    <link rel="stylesheet" href="/css/editabout.css">
@endsection
 

@section('content')
    
    <div class="aboutediting">
	    


	    <form action="/updateabout" method="post">
            <h3>About us</h3>

            <td>
                <textarea name="textarea" id="textarea" width="400" height="500"> {{ $about->textarea }} </textarea>
            </td>
            <br>
            <div>
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
            <br>
            <br>
            </div>
    
            <br>
		</form>

    </div>
    
@endsection

@section("scripts")
	<!-- <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script> -->
	<!-- <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script> -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
@endsection
