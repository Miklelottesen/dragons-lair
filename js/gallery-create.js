var imgID;
var videoMatch;
var isVideo;
$(document).ready(function(){
	var videoMatch;
	var elem;
	hideable = true;
 	$('#black').css("display","none");
  	$('#showpic').css("display","none");
  	$('#black').css("opacity","0");
  	$('#showpic').css("opacity","0");
  	$.getJSON('gallery/getfiles.php', function(elem) {
   		for(var i = 0; i < elem.length; ++i){
			$('#mygallery').prepend('<a rel="'+i+'" class="thumb" id="'+elem[i]+'" href="img/testgal/'+elem[i]+'"><img alt="Title 1" src="img/testgal/thumbs/'+elem[i]+'"/></a>')
		}
		$("#mygallery").justifiedGallery();

		//Event listeners:
		$('.thumb').click(function(){
			n = parseInt($(this).attr('rel'));
			obj = $(this).attr('id');
			console.log(n+','+obj);
			showFull(obj,n);
			return false;
		});
		$('#arrowPrev').click(function(){
			if($('#videoPlayer').css('display') == 'none'){
				n = (parseInt($('#fullimg').attr('rel'))) + 1;
			} else {
				n = (parseInt($('#videoPlayer').attr('rel'))) + 1;
			}
			obj = $(this).prev().attr('id');
			showFull(elem[n],n);
			return false;
		});
		$('#arrowNext').click(function(){
			if($('#videoPlayer').css('display') == 'none'){
				n = (parseInt($('#fullimg').attr('rel'))) - 1;
			} else {
				n = (parseInt($('#videoPlayer').attr('rel'))) - 1;
			}
			obj = $(this).next().attr('id');
			showFull(elem[n],n);
			return false;
		});
		$('#imgtext').click(function(){
			hideable = false;
		});
		$('#black').click(function(){
			if(hideable == true){
				hideIt();
			}
			hideable = true;
		});
		$('#fullimg').click(function(){
			if(hideable == true){
				hideIt();
			}
			hideable = true;
		});
		function hideIt(){
			$('#black').animate({opacity: 0},200);
			$('#showpic').animate({opacity: 0},200);
			$('#videoPlayer').empty();
			setTimeout(function(){
				$('#black').css('display','none');
				$('#showpic').css('display','none');
				return;
			},200);
		}
		isVideo = false;
		
		function showFull(obj,imgID){
			obj = obj;
			imgID = imgID;
			var videoFile;
			var videoMatch = false;
   						}
   					}
   					if(videoMatch == true){
   						videoMatch = false;
   							$('#videoPlayer').css('display','block');
   							$('#fullimg').css('display','none');
   							path = btoa('img/testgal/vid/'+videoFile);
							console.log(path);
							if($('#black').css('display') == 'none'){
								$('#videoPlayer').load('gallery/playvid.php?path='+path);
								$('#black').css('display','block');
								$('#showpic').css('display','block');
								$('#black').animate({opacity: 0.7},200);
								$('#showpic').animate({opacity: 1},200);
							} else {
								path = btoa('img/testgal/vid/'+videoFile);
								if(isVideo == true){
									$('#videoPlayer').animate({opacity: 0},200);
								} else {
									$('#fullimg').animate({opacity: 0},200);
								}											
								setTimeout(function(){
									$('#videoPlayer').load('gallery/playvid.php?path='+path);
									$('#videoPlayer').animate({opacity: 1},200);
								},200);
								
								
							}
							isVideo = true;
							$('#videoPlayer').attr('rel',vidID);
							currentID = imgID;
							if(currentID == 0){
								$('#arrowNext').css('display','none');
							} else {
								$('#arrowNext').css('display','inline-block');
								console.log(currentID+obj.length);
							}
							if(currentID == obj.length - 1){
								$('#arrowPrev').css('display','none');
							} else {
								$('#arrowPrev').css('display','inline-block');
							}
   					} else { //Clicked thumb is not a video
   							$('#videoPlayer').css('display','none');
   							$('#fullimg').css('display','block');
   							path = './img/gallery/'+obj;
							console.log(path);
							if($('#black').css('display') == 'none'){
								$('#fullimg').attr('src',path);
								$('#black').css('display','block');
								$('#showpic').css('display','block');
								$('#black').animate({opacity: 0.7},200);
								$('#showpic').animate({opacity: 1},200);
							} else {
								if(isVideo == false){
									$('#fullimg').animate({opacity: 0},200);
								} else {
									$('#videoPlayer').animate({opacity: 0},200);
								}											
								setTimeout(function(){
									$('#fullimg').attr('src',path);
									$('#fullimg').animate({opacity: 1},200);
								},200);
								isVideo = false;
								
							}
							$('#fullimg').attr('rel',imgID);
							currentID = imgID;
							if(currentID == 0){
								$('#arrowNext').css('display','none');
							} else {
								$('#arrowNext').css('display','inline-block');
								console.log(currentID+obj.length);
							}
							if(currentID == obj.length - 1){
								$('#arrowPrev').css('display','none');
							} else {
								$('#arrowPrev').css('display','inline-block');
							}
   						}
   					
			});
		}
	});
});