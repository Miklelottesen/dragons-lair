<!DOCTYPE html>
<html>
<head>
	<title>Dragons Lair</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!-- Bootstrap css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css"><!-- Own css file -->
	<link href='http://fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'><!-- Marcellus Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'><!-- Roboto Google Font -->
	<?php
		if ( empty( $_GET )) {
			// no data passed by get, which means it's the Home page
			echo '<link id="home-css" rel="stylesheet" type="text/css" href="css/home.css">';
			// Load custom CSS for Home page
		}
		 if( $page_id == "news"){
			echo '<link id="news-css" rel="stylesheet" type="text/css" href="./css/news.css">';
			}
				// Load custom CSS for News page
		if( $page_id == "events"){
			echo '<link id="events-css" rel="stylesheet" type="text/css" href="./css/events.css">';
			}	// Load custom CSS for Events page
		if( $page_id == "rankings"){
			echo '<link id="rankings-css" rel="stylesheet" type="text/css" href="./css/rankings.css">';
			}	// Load custom CSS for rankings page
		if( $page_id == "guides"){
			echo '<link id="guides-css" rel="stylesheet" type="text/css" href="./css/guides.css">';
			}	// Load custom CSS for guides page
		if( $page_id == "gallery"){
			echo '<link id="guides-css" rel="stylesheet" type="text/css" href="./css/gallery.css">';
			}	// Load custom CSS for gallery page

	?>
	<link rel="shortcut icon" href="./favicons/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<!-- /\ Making content display properly on mobile devices -->
	<script src="js/jquery-2.1.1.min.js"></script><!-- jQuery -->
	<script src="js/bootstrap.min.js"></script><!-- Bootstrap js file -->
</head>
<body>
	<header>
		<!-- Header: -->
		<?php
			include 'includes/nav.php'; 
				// The navbar with logo and search field
		?>
	</header>