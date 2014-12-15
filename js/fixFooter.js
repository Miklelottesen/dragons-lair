/*****************************************************
Function that positions the footer on the bottom, if 
the page doesn't have enough content to push it there.
*****************************************************/
function fixFooter() {
	var docHeight = $(window).height();
	var footerHeight = $('footer').height();
	var footerTop = $('footer').position().top + footerHeight;
	if (footerTop < docHeight) {
		$('footer').css('margin-top', (docHeight - footerTop) + 'px');
	}
}

$(document).ready(function(){
	// The function is executed on document.ready
	fixFooter();
	setTimeout(function(){
		// Necessary on some pages, for some reason
		fixFooter();
	},1);
});

$(window).resize(function(){
	// Also executed on window.resize
	fixFooter();
});