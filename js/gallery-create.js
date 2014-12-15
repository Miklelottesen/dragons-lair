/****************************************
Load the file list of the gallery folder,
created by php/getfiles.php and stored in
a JSON array
****************************************/
$(document).ready(function(){
  	$.getJSON('./php/getfiles.php', function(elem) {
   		for(var i = 0; i < elem.length; ++i){
			$('#mygallery').prepend('<a rel="'+i+'" class="thumb" id="'+elem[i]+'" href="./img/gallery/'+elem[i]+'"><figure class="thumb-container"><img alt="Gallery image" src="./img/gallery/thumbs/'+elem[i]+'"/></figure></a>');	
		}
	});
});