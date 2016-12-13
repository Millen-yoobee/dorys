@extends("admin") 

@section("title", "Edit Terms 2")

@section("description", "Edit form for Terms and Conditions for 2-hour set menus")

@section("styles")
<!--     <link rel="stylesheet" href="/css/editterms.css">
 -->
 @endsection
 

@section('content')
    
    <div class="editterms">
	    
        <h3>Terms and Conditions</h3>


        <form action="/updateterms2" method="post">
            {{ csrf_field()  }}

            <h4>
                For two-hour set menus
            </h4>

            <td>
                <textarea name="textarea" id="textarea" width="400" height="500"> {{ $term->two }} </textarea>
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
