
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- The above 3 meta tags must stay above -->
		<title>@yield("title") </title>

		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">

		<meta name="robots" content="noindex, nofollow">

		<link rel="stylesheet" href="/css/styles.css">

		@yield("styles")	

		<script src="https://use.fontawesome.com/d199abc0f2.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

		@yield("scripts")	


	</head>

	<div id="container">
			
		<div id="header">
			<a href="/" > <h1 id="busName"> Dory's Admin </h1></a>
			<nav>	
				<span class="nav-btn">
	 				<i class="fa fa-bars" aria-hidden="true"></i>
	 			</span>
				<ul class="nav">
					@if (Auth::check())
						<li id="categories">	<a href="/categories">	Categories 	</a></li>
						<li id="dishes">   		<a href="/dishes"> 		Change dishes  	</a></li>
						<li id="setmenus"> 		<a href="/setmenus"> 	Change set menus 	</a></li>
						<li id="editterms">		<a href="/editterms"> 		Edit terms 	</a></li>
						<li id="editabout">		<a href="/editabout">	Edit about us</a></li>
			  			<li id="logout">		<a href="/logout">			Log out 	</a></li>
 		  			@endif

				</ul>
			</nav>
		</div>

		<hr>
		
		<div id="body">
 			@yield("content")
		</div>

		
		<div id="footer">
			<p> Call us on 097 123 1234</p>
			<p> Copyright &copy; <?php echo date('jS M Y'); ?> </p>
		</div>
	    
	    @yield("scripts")

		<script type="text/javascript" src="/js/scripts.js"> </script>

	</div>

</html>