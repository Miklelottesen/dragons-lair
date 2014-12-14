$(document).ready(function(){
	$('#search-button').click(function(event){
		if ( $('#search-bar').is( ":focus") === false){
			event.preventDefault();
			$('#search-bar').focus();
		}
	});
	$('#search-bar').click(function(){
		console.log('#search-bar').is(':focus');
	});
});