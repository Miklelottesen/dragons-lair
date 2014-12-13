<!DOCTYPE html>
<html>
<head>
	<title>Dragons Lair</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!-- Bootstrap css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css"><!-- Own css file -->
	<link href='http://fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'><!-- Marcellus Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'><!-- Roboto Google Font -->
	<?php
		if ( $page_id === 'gallery'){
			echo '<link rel="stylesheet" type="text/css" href="css/justifiedGallery.min.css"><!-- Justified Gallery plugin -->';
				// Include CSS file for Justified Gallery, if page is gallery
		}

		if ( empty( $_GET )) {
		    // no data passed by get, which means it's the Home page
		    echo '<link id="home-css" rel="stylesheet" type="text/css" href="css/home.css">';
		    	// Load custom CSS for Home page
		}
	?>
	<link rel="shortcut icon" href="/favicons/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<script src="js/jquery-2.1.1.min.js"></script><!-- jQuery -->
	<script src="js/bootstrap.min.js"></script><!-- Bootstrap js file -->
	<?php
		if ( $page_id === 'gallery'){
			echo '<script src="js/jquery.justifiedGallery.min.js"></script><!-- Justified Gallery plugin -->';
				// Load Justified Gallery plugin if page is gallery
		}
	?>
</head>
<body>
	<header>
		<!-- Header: -->
		<?php
			include 'includes/nav.php'; 
				// The navbar with logo and search field
		?>
	</header>