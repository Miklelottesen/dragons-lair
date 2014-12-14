// Set top-padding on <main>, to compensate for fixed navbar
if ( $('#home-css').length === 0 ){
	// If home.css isn't loaded - eg, if it's not the Home page (homepage already has a top-margin)
	var navHeight = $('nav').height();
	$('main').css( 'paddingTop', navHeight);
}

// Enable navigation when clicking on a link that has a dropdown (disabled by Bootstrap by default)
$('.dropdown-toggle').click(function(){
	var aLocation = $(this).attr( 'href' ); // Store link destinaion as variable
	if ( $(".navbar-toggle").css( 'display' ) === 'none' ){
		// Only enable navigation on desktop version (when the menu button is hidden)
		window.location.href = aLocation;
	}
});