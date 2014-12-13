<!DOCTYPE html>
<html>
<head>
	<title>Dragons Lair</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!-- Bootstrap css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css"><!-- Own css file -->
	<?php
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
</head>
<body>
	<header>
		<!-- Header: -->
		<?php
			include 'includes/nav.php'; 
				// The navbar with logo and search field
		?>
	</header>