$("span.nav-btn").click(function () {
	$("ul.nav").slideToggle();
} )

$(window).resize(function () {

	if ( $(window).width() > 700 ) {

		$("ul.nav").removeAttr("style");
	}


} )
