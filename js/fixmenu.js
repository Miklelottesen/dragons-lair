// Set top-padding on <main>, to compensate for fixed navbar
if ( $('#home-css').length === 0 ){
	// If home.css isn't loaded - eg, if it's not the Home page (homepage already has a top-margin)
	var navHeight = $('nav').height();
	$('main').css( 'paddingTop', navHeight);
}