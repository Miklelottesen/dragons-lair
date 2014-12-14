$(document).ready(function(){
	$('#search-button').click(function(event){
		if ( $('#search-bar').is( ":focus") === false){
			event.preventDefault();
			$('#search-bar').focus();
		} else {}
	});
});