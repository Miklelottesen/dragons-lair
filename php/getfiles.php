<?php
/**********************************************
Get a list of every file in the gallery folder,
store the list as a JSON array
**********************************************/
	$dir          = "../img/gallery/";
	$return_array = array();
	
	if(is_dir($dir)){
	
	    if($dh = opendir($dir)){
	        while(($file = readdir($dh)) != false){
	
	            if($file === "." or $file === ".." or $file === "thumbs"){
					// Do nothing
	            } else {
	                $return_array[] = $file; // Add the file to the array
	            }
	        }
	    }
	    echo json_encode($return_array);
	}
?>