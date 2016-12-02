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

		<script src="https://use.fontawesome.com/d199abc0f2.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


		@yield("styles")	

	</head>

	<body> 
		
		
		<a href="/" > <h1 id="busName"> Dory's Restaurant </h1></a>
		<nav>	
			<span class="nav-btn">
 				<i class="fa fa-bars" aria-hidden="true"></i>
 			</span>
			<ul class="nav">
	  			<li> <a href="/View" >View menus </a>	</li>
	  			<li> <a href="/Listing">Order	</a>	</li>
	  			<li> <a href="/Reserve">Reserve	</a>	</li>
	  			<li> <a href="/Location">Our Location </a> </li>
	  			<li> <a href="/Terms">Terms and conditions</a> 	</li>
	  			<!-- <li> <a href="/Gallery">Gallery	</a>	</li> -->
	  			<li> <a href="/About">About us	</a>	</li>
			</ul>
		</nav>

		<br>
		<hr>

		<div id="main_container">
			<!-- @include("partials._messages") --> <!-- may not need this  -->

 			@yield("content")

		</div>

		<hr>
		<footer>
			<p> Call us on 097 123 1234</p>
			<p> Copyright &copy; <?php echo date('jS M Y'); ?> </p>
		</footer>
	    
	    @yield("scripts")

		<script type="text/javascript" src="/js/scripts.js"> </script>

	</body>
</html>